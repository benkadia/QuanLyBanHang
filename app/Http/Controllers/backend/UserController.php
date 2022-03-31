<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = User::model()
            ->paginate(10);
        $total = $list->total();
        $i = 1;
        return view('backend.user.list', ['list' => $list, 'total' => $total, 'i' => $i]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = User::model()->get(['id', 'name']);
        return view('backend.user.form', ['cats' => $cats, 'action' => route('users.store'), 'title' => 'Thêm sản phẩm', 'method' => 'POST']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => ['required', 'string', 'max:50', 'min:5'],
            'password' => ['required', 'min:6', 'max:20'],
            'name' => ['required', 'string', 'max:50', 'min:5'],
            'email' => ['required', 'max:20', 'min:2', 'email'],
            'phone' => ['required', 'numeric'],
        ], [
            'name.string' => 'Tên phải là chữ',
            'name.required' => 'Tên không được trống',
            'username.required' => 'Tên đăng nhập không được trống',
            'email.required' => 'email không được trống',
            'phone.required' => 'số điện thoại không được trống',
            'username.string' => 'Tên phải là string',
            'email.email'    => 'Phải là kiểu email',
            'phone.numeric'  => 'SĐT phải là số'
        ]);
        User::insert([
            "name" => $request->name,
            "username" => $request->username,
            "password" => Hash::make($request->password),
            "email" => $request->email,
            "phone" => $request->phone,
            "image" => $request->image,
        ]);
        return redirect()->back()->with(['type' => 'success', 'msg' => 'Thêm thành công', 'title' => 'Thêm người dùng']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = User::model()->where('id', $id)->first();
        if (!$item)
            return redirect()->route('users.index')->with(['type' => 'danger', 'msg' => 'User không tồn tại', 'title' => 'Sửa User']);
        $cats = User::model()->get(['id', 'name']);
        return view('backend.user.form', ['cats' => $cats, 'item' => $item, 'action' => route('users.update', $id), 'title' => 'Sửa User ' . $item->sku, 'method' => 'PUT']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = User::model()->where('id', $id)->first();
        if (!$item)
            return redirect()->route('users.index')->with(['type' => 'danger', 'msg' => 'User không tồn tại', 'title' => 'Sửa User']);
        $request->validate([
            'username' => ['required', 'string', 'max:50', 'min:5'],
            'password' => ['required', 'min:6', 'max:20'],
            'name' => ['required', 'string', 'max:50', 'min:5'],
            'email' => ['required', 'max:20', 'min:2', 'email'],
            'phone' => ['required', 'numeric'],
        ], [
            'name.string' => 'Tên phải là chữ',
            'name.required' => 'Tên không được trống',
            'username.required' => 'Tên đăng nhập không được trống',
            'email.required' => 'email không được trống',
            'phone.required' => 'số điện thoại không được trống',
            'username.string' => 'Tên phải là string',
            'email.email'    => 'Phải là kiểu email',
            'phone.numeric'  => 'SĐT phải là số'
        ]);
        $item->name = $request->name;
        $item->username = $request->username;
        $item->password = $request->password;
        $item->phone = $request->phone;
        $item->email = $request->email;
        $item->image = $request->image;
        $item->save();
        User::where('id', $id)->update([
            "name" => $request->name,
            "username" => $request->username,
            "password" => Hash::make($request->password),
            "phone" => $request->phone,
            "email" => $request->email,
            "image" => $request->image,
        ]);
        return redirect()->back()->with(['type' => 'success', 'msg' => 'Sửa thành công', 'title' => 'Sửa User']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = User::model()->where('id', $id)->first();
        if (!$item)
            return redirect()->route('users.index')->with(['type' => 'danger', 'msg' => 'User không tồn tại', 'title' => 'Xóa User']);
        // Product::where('id',$id)->update([
        //         "status" => 0
        //     ]);
        $item->status = 0;
        $item->save();
        return redirect()->back()->with(['type' => 'success', 'msg' => 'Xóa SKU:' . $item->name . ' thành công', 'title' => 'Xóa User']);
    }
}
