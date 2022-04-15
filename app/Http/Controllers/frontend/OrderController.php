<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class OrderController extends Controller
{
    public function checkout()
    {
        // Lưu  thông tin sản phẩm vào session cart và chuyển về kiểu là collection để xử lý được
        $cart = collect(session('cart'));
        if($cart->isEmpty())
            return redirect()->route('f.cart');
            // Trả về view thanh toán
        return view('frontend.cart.checkout',['cart'=>$cart]);
    }
    public function finshed()
    {
        // Lưu giỏ hàng vào session ordered
        $ordered = session('ordered');
        if(!$ordered)
            return redirect()->route('f.cart');
        return view('frontend.cart.finished',['ordered'=>$ordered,'items'=>$ordered->items()->get()]);
    }
    public function checkoutPost(Request $request)
    {
        $cart = collect(session('cart'));
        dd($cart);
        if($cart->isEmpty())
            return redirect()->route('f.cart');
        // validate dữ liệu đầu vào
        $request->validate([
            'bill_firstname' => ['required','string','min:2','max:30'],
            'bill_lastname' => ['required','string','min:2','max:30'],
            'bill_email' => ['required','email'],
            'bill_phone' => ['required','numeric','digits:10'],
            'bill_address' => ['required','string','max:255'],
            'ship_firstname' => ['required','string','min:2','max:30'],
            'ship_lastname' => ['required','string','min:2','max:30'],
            'ship_email' => ['required','email'],
            'ship_phone' => ['required','numeric','digits:10'],
            'ship_address' => ['required','string','max:255'],
            'notes' => ['required'],
            'payment_method' => ['required'],
        ],[
            'bill_firstname.required' => 'Họ và tên lót không được để trống',
            'bill_firstname.string' => 'Họ và tên lót phải là chữ',
            'bill_firstname.min' => 'Họ và tên lót phải >=2',
            'bill_firstname.max' => 'Họ và tên lót <=30',
            'bill_lastname.required' => 'Tên không được để trống',
            'bill_lastname.string' => 'Tên phải là chữ',
            'bill_lastname.min' => 'Tên phải >=2',
            'bill_lastname.max' => 'Tên phải <=30',
            'ship_firstname.required' => 'Họ và tên lót người nhận hàng không được để trống',
            'ship_firstname.string' => 'Họ và tên lót người nhận hàng phải là chữ',
            'ship_firstname.min' => 'Họ và tên lót người nhận hàng phải >=2',
            'ship_firstname.max' => 'Họ và tên lót người nhận hàng <=30',
            'ship_lastname.required' => 'Tên người nhận hàng không được để trống',
            'ship_lastname.string' => 'Tên người nhận hàng phải là chữ',
            'ship_lastname.min' => 'Tên người nhận hàng phải >=2',
            'ship_lastname.max' => 'Tên người nhận hàng phải <=30',
            'bill_email.required' => 'Email không được để trống',
            'bill_email.email' => 'Email phải thuộc kiểu email',
            'ship_email.required' => 'Email người nhận hàng không được để trống',
            'ship_email.email' => 'Email người nhận hàng phải thuộc kiểu email',
            'bill_phone.required' => 'Số điện thoại không được để trống',
            'bill_phone.numeric' => 'Số điện thoại phải là chữ số',
            'bill_phone.digits' => 'Số điện thoại là 10 số',
            'ship_phone.required' => 'Số điện thoại người nhận hàng không được để trống',
            'ship_phone.numeric' => 'Số điện thoại người nhận hàng phải là chữ số',
            'ship_phone.digits' => 'Số điện thoại người nhận hàng là 10 số',
            'bill_address.required' => 'Địa chỉ không được để trống',
            'bill_address.string' => 'Địa chỉ phải là chữ',
            'bill_address.max' => 'Địa chỉ tối đa 255 ký tự',
            'ship_address.required' => 'Địa chỉ người nhận hàng không được để trống',
            'ship_address.string' => 'Địa chỉ người nhận hàng phải là chữ',
            'ship_address.max' => 'Địa chỉ người nhận hàng tối đa 255 ký tự',
            'notes.required' => 'Ghi chú không được để trống',
            'payment_method.required' => 'Phương thức giao hàng không được để trống',
        ]);
        //tao customer trước với email đặt hàng
        $customer = Customer::where('email',$request->bill_email)->first(['id']);
        // Nếu k có khách hàng thì tạo mới và lưu email mới. Nếu có thì cập nhật lại email và các trường còn lại
        if(!$customer)
        {
            $customer = Customer::create();
            $customer->email = $request->bill_email;
        }
        $customer->firstname = $request->bill_firstname;
        $customer->lastname = $request->bill_lastname;
        $customer->phone = $request->bill_phone;
        $customer->address = $request->bill_address;
        $customer->ship_firstname = $request->ship_firstname?$request->ship_firstname:$request->bill_firstname;
        $customer->ship_lastname = $request->ship_lastname?$request->ship_lastname:$request->bill_lastname;
        $customer->ship_address = $request->ship_address?$request->ship_address:$request->bill_address;
        $customer->ship_phone = $request->ship_phone?$request->ship_phone:$request->bill_phone;
        $customer->ship_email = $request->ship_email?$request->ship_email:$request->bill_email;
        $customer->save();
        // tao đơn hàng mới
        $order = Order::create();
        $code = Str::random(5).$order->id;
        $order->code = $code;
        $order->order_date = now();
        $order->customer_id = $customer->id;
        $order->total_amount = $cart->sum('totalamount');
        $order->order_status = 1;
        $order->notes = $request->notes;
        $order->payment_method = $request->payment_method;
        $order->save();
        //$order->coupon
        //tao chi tiết đơn hàng mới
        $items = [];
        foreach($cart as $item)
        {
            $items[] = [
                'order_id'=>$order->id,
                'product_id'=>$item->id,
                'qty'=>$item->buyqty,
                'price'=>$item->price
            ];
        }
        OrderItem::insert($items);
        //huy  gio hang
        //dd($order->items->first()->product());
        session(['cart'=>null]);

        //gui mail
        return redirect()->route('o.finshed')->with(['ordered'=>$order,'type'=>'success','msg'=>'Thanh toán thành công','title'=>'Thanh toán sản phẩm đã đặt hàng']);
    }
}
