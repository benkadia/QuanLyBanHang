<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class CartController extends Controller
{
    public function index()
    {
        $cart = collect(session('cart'));
        return view('frontend.cart.index',['cart'=>$cart]);
    }
    public function addtocart($id)
    {
        //dd($id);
        $item = Product::where(['id'=>$id,'status'=>1])->first();
        if(!$item)
            return redirect()->back();
        if(!$item->qty)
            return redirect()->back();
        //add vo gio
        $cart = session('cart');
        if(isset($cart[$item->id]))
        {
            $cart[$item->id]->buyqty ++;
            $cart[$item->id]->totalamount = $cart[$item->id]->buyqty* $cart[$item->id]->price;
        }else{
            $item->buyqty = 1;
            $item->totalamount = $item->buyqty* $item->price;
            $cart[$item->id] = $item;
        }
        //ghi vào session
        session(['cart'=>$cart]);
        return redirect()->route('f.cart');
    }
    public function updatecart(Request $request)
    {
        $request->validate([
            'buyqty'=>'required|array'
        ]);
        $cart = session('cart');
        foreach($request->buyqty as $id=>$qty)
        {
            $cart[$id]->buyqty = $qty;
            $cart[$id]->totalamount = $cart[$id]->buyqty* $cart[$id]->price;
        }
        session(['cart'=>$cart]);
        return redirect()->route('f.cart');
    }
    public function deleteitem($id)
    {
        $cart = session('cart');
        unset($cart[$id]);
        session(['cart'=>$cart]);
        return redirect()->route('f.cart');
    }
}
