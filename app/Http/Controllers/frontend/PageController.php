<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $list1 = Product::where('status',1)
        ->orderBy(\DB::raw('rand()'))->take(5)->get();
        $list2 = Product::where('status',1)
        ->orderBy(\DB::raw('rand()'))->take(5)->get();
        return view('frontend.page.home',['list1'=>$list1,'list2'=>$list2,'title'=>'Trang Chủ']);
    }
}
