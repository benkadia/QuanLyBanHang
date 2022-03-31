<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class AuthController extends Controller
{
    public function reset()
    {
        return view('backend.auth.resetpass');
    }
    public function resetPost(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', 'max:50']
        ], [
            'email.required' => 'Email không được trống',
            'email.max' => 'Email từ tối đa 50 ký tự',
            'email.email' => 'Email không hợp lệ'
        ]);
        $user =
            User::where(['status' => 1, 'email' => $request->email])
            ->where(function ($q) {
                $q->whereNull('timelife')->orWhere('timelife', '<', date('Y-m-d H:i:s'));
            })
            //dd($user->toSql());
            //select * from `users` where (`status` = ? and `email` = ?) and (`timelife` is null or `timelife` < ?)
            //dd($user->getBindings());
            ->first();
        $timelife = time() + 30;
        if ($user) {
            $token = md5($user->id . $timelife);
            $user->reset_token = $token;
            $user->timelife = date('Y-m-d H:i:s', $timelife);
            if ($user->save()) {
                $href = route('admin.setpass', $token);
                try {
                    \Mail::send('backend.auth.templatepass', ['href' => $href], function ($message) use ($user) {
                        // $message->from('john@johndoe.com', 'John Doe');
                        // $message->sender('john@johndoe.com', 'John Doe');
                        $message->to($user->email, $user->name);
                        // $message->cc('john@johndoe.com', 'John Doe');
                        // $message->bcc('john@johndoe.com', 'John Doe');
                        // $message->replyTo('john@johndoe.com', 'John Doe');
                        $message->subject('Đặt lại mật khẩu');
                        // $message->priority(3);
                        // $message->attach('pathToFile');
                    });
                    return redirect()->back()->with(['type' => 'success', 'msg' => 'Vui lòng kiểm tra gmail', 'title' => 'Quên mật khẩu']);
                } catch (\Exception $e) {
                    $user->timelife = null;
                    $user->save();
                    return redirect()->back()->with(['type' => 'danger', 'msg' => $e->getMessage(), 'title' => 'Quên mật khẩu']);
                }
            } else {

                return redirect()->back()->with(['type' => 'danger', 'msg' => 'Xảy ra lỗi', 'title' => 'Đăng xuất']);
            }
        } else {
            // sai email nhập vào
            return redirect()->back()->with(['type' => 'info', 'msg' => 'Bạn đang trong quá trình lấy lại mật khẩu', 'title' => 'Quên mật khẩu']);
        }
    }
    public function setpass($token)
    {
        $user = User::where([
            'status' => 1,
            'reset_token' => $token,
        ])
            ->where('timelife', '>', date('Y-m-d H:i:s'))
            ->first();
        if (!$user)
            return redirect()->route('admin.login')->with('message', 'Token hết hiệu lưc, vui lòng thử lại');
        return view('backend.auth.setpass', ['action' => route('admin.setpasspost', $token)]);
    }
    public function setpassPost(Request $request, $token)
    {
        $request->validate([
            'password' => ['required', 'max:50', ''],
            'password2' => ['required', 'max:50']
        ], [
            'password.required' => 'password không được trống',
            'password.max' => 'password từ tối đa 50 ký tự',
            'password2.required' => 'password xác nhận không được trống',
            'password2.max' => 'password xác nhận từ tối đa 50 ký tự'
        ]);
        $user = User::where([
            'status' => 1,
            'reset_token' => $token,
        ])
            ->where('timelife', '>', date('Y-m-d H:i:s'))
            //dd($user->toSql());
            // "select * from `users` where (`status` = ? and `reset_token` = ?) and `timelife` > ?"
            ->first();
        if (!$user)
            return redirect()->route('admin.login');
        $user->password = Hash::make($request->password);
        $user->reset_token = null;
        $user->timelife = null;
        if ($user->save())
            return redirect()->route('admin.login')->with(['type' => 'info', 'msg' => 'Vui lòng đăng nhập', 'title' => 'Đăng nhập']);
        else {
            return redirect()->back()->with(['type' => 'danger', 'msg' => 'Hệ thông lỗi', 'title' => 'Đặt lại mật khẩu']);
        }
    }
    public function login()
    {
        return view('backend.auth.login');
    }
    public function loginPost(Request $request)
    {
        $request->validate([
            'username' => [
                'required', 'min:3', 'max:20', 'exists:users,username'
            ],
            'password' => ['required', 'min:3', 'max:20']
        ], [
            'username.required' => 'Tên đăng nhập không được trống',
            'username.min' => 'Tên đăng nhập từ 3 tới 20 ký tự',
            'username.max' => 'Tên đăng nhập từ 3 tới 20 ký tự',
            'username.exists' => 'Thông tin đăng nhập không chính xác',
            'password.required' => 'Mật khẩu không được trống',
            'password.min' => 'Mật khẩu từ 3 tới 20 ký tự',
            'password.max' => 'Mật khẩu từ 3 tới 20 ký tự',
        ]);
        //kiem tra dang nhap
        //dd(['email' => $request->username, 'password' => $request->password],);
        //tim user ra
        // $user = User::where('username',$request->username)->first();
        // Auth::loginUsingId($user->id);
        if (Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password], $request->remember)) {
            if (auth('admin')->user()->status == 1)
                return redirect()->route('admin.home');
            else {
                auth('admin')->logout();
                return redirect()->back()->with(['type' => 'danger', 'msg' => 'Tài khoản bị khóa, vui lòng báo admin', 'title' => 'Đăng nhập']);
            }
        } else {
            return redirect()->back()->with(['type' => 'danger', 'msg' => 'Đăng nhập thất bại, vui lòng báo admin', 'title' => 'Đăng nhập']);
        }
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login')->with(['type' => 'info', 'msg' => 'Bạn đã thoát khỏi hệ thống', 'title' => 'Đăng xuất']);
    }
    public function pass(Request $request)
    {
        echo (date('Y:m:d H:i:s')) . '<br>';
        echo 'Ngày tháng md5 ra: ' . md5(date('Y:m:d H:i:s')) . '<br>';
        echo md5($request->key), '<br>';
        return Hash::make($request->key);
    }
    public function home()
    {
        return view('backend.home');
    }
    public function profile()
    {
        return view('backend.user.user_profile');
    }
    public function profilesetting()
    {
        $user = User::model()->where('id', '=', auth('admin')->user()->id)->first();
        return view('backend.user.user_account_setting',['user'=>$user,'method'=>'PUT']);
    }
    public function profilesettingPut(Request $request)
    {
        // validation dữ liệu
        $request->validate([
            'name'=>['required','string','max:50','min:5'],
            'image'=>['required','image'],
        ],[
            'name.min'=>'Tên không được nhỏ hơn 5 ký tự',
            'name.required'=>'Tên không được trống',
            'name.max' => 'Tên không được lớn hơn 50 ký tự',
            'name.string' => 'Tên phải là ký tự'
        ]);

        // Gán từng dòng dữ liệu vào request và lưu vào db
        $user = User::model()->where('id', '=', auth('admin')->user()->id)->first();
        $user->image = $request->image;
        $user->name = $request->name;
        $user->birthday = $request->birthday;
        $user->profession = $request->profession;
        $user->about = $request->about;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->linkedin_link = $request->linkein_link;
        $user->facebook_link = $request->facebook_link;
        $user->twitter_link = $request->twitter_link;
        $user->website_link = $request->website_link;
        $user->save();
        // gọi từng biến ở name của input ra request
        User::model()->where('id', '=', auth('admin')->user()->id)->update([
            "image" => $request->image,
            "name" => $request->name,
            "birthday" => $request->birthday,
            "profession" => $request->profession,
            "about" => $request->about,
            "address" => $request->address,
            "phone" => $request->phone,
            "email" => $request->email,
            "linkedin_link" => $request->linkedin_link,
            "facebook_link" => $request->facebook_link,
            "twitter_link" => $request->twitter_link,
            "website_link" => $request->website_link
        ]);
        return redirect()->back()->with(['type'=>'success','msg'=>'Sửa thành công','title'=>'Sửa profile']);
    }
    public function changePass()
    {
        $user = User::model();
        return view('backend.user.change_password',['user'=>$user]);
    }
    public function changePassPut(Request $request)
    {

        if (!(Hash::check($request->get('current_password'), auth('admin')->user()->password)))
            // The passwords matches
            return redirect()->back()->with(["error" =>"Mật khẩu hiện tại không đúng. Vui lòng thử lại."]);
        if($request->get('current_password') == $request->get('new_password'))
            return redirect()->back()->with(["error" =>"Mật khẩu mới không được giống với mật khẩu hiện tại"]);
         $request->validate([
            'new_password' => ['required','min:6','max:20'],
            'confirm_password' => ['required','same:new_password']
        ],
        [
            'new_password.required' => 'Mật khẩu mới không được để trống',
            'new_password.min' => 'Mật khẩu mới phải lớn hơn 6',
            'new_password.max' => 'Mật khẩu mới phải nhỏ hơn 20',
            'confirm_password.required' => ' Xác nhận mật khẩu không được để trống',
            'confirm_password.same' => ' Xác nhận mật khẩu phải bằng mật khẩu mới',
        ]);

        $user = User::model()->where('id',auth('admin')->user()->id)->first();
        $user->password = Hash::make($request->confirm_password);
        $user->save();
        User::model()->where('id',auth('admin')->user()->id)->update([
            'password' => Hash::make($request->confirm_password)
        ]);
        return redirect()->route('admin.login')->with(['type'=>'success','msg'=>'Thay đổi thành công. Vui lòng đăng nhập để sử dụng','title'=>'Thay đổi mật khẩu']);
    }
}
