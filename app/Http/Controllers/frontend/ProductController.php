<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        return 123;
    }
    public function detail($alias,$id)
    {
        $item = Product::where(['alias'=>$alias,'id'=>$id])->first();
        dd($item);
    }
    public function category($alias,$id)
    {
        $cate = Category::where(['alias'=>$alias,'id'=>$id])->first();
        $items = $cate->products()->where('status',1)->get();
        dd($items);
    }
}
