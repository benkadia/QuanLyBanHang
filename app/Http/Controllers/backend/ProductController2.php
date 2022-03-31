<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController2 extends Controller
{
    public function __construct()
    {
        //$this->middleware('admin.auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //dd($request->all());
        //dd(storage_path());
        //get(): lay ra 1 ds
        //first(); lay ra 1 dong dau tien
       // dd($request->key);
        $list = //\DB::table('products')
                Product::model()
                ->where('name','like','%'.$request->key.'%')
                //->get();//['id','username','name','status']
                ->paginate(10);
//dd($list);
//dd($list->getBindings());
               // dd($list);
        $total = $list->total();
        //dd($list);
        return view('backend.product.list',['list'=>$list,'total'=>$total]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //dd($request->all());
//        dd( $request->fil);
        $cats = Product::model()->get(['id','name']);
        return view('backend.product.form',['cats'=>$cats,'action'=>route('products.store'),'title'=>'Thêm sản phẩm','method'=>'POST']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'name'=>['required','string','max:50','min:5'],
            'sku'=>['required','alpha_num','max:20','min:2'],
            'price'=>['required','numeric'],
            'qty'=>['required','numeric'],
        ],[
            'name.string'=>'Tên không được trống',
            'name.required'=>'Tên không được trống'
        ]);
        Product::insert([
            "name" => $request->name,
            "sku" => $request->sku,
            "price" => $request->price,
            "qty" => $request->qty,
            "content" => $request->content,
            "image" => $request->image,
            "images" => $request->images,
            "category_id" => $request->category_id,
        ]);
        return redirect()->back()->with(['type'=>'success','msg'=>'Thêm thành công','title'=>'Thêm sản phẩm']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('backend.product.view');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Product::model()->where('id',$id)->first();
        if(!$item)
            return redirect()->route('products.index')->with(['type'=>'danger','msg'=>'Sản phẩm không tồn tại','title'=>'Sửa sản phẩm']);
        $cats = Product::model()->get(['id','name']);
        return view('backend.product.form',['cats'=>$cats,'item'=>$item,'action'=>route('products.update',$id),'title'=>'Sửa sản phẩm '.$item->sku,'method'=>'PUT']);
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
        $item = Product::model()->where('id',$id)->first();
        if(!$item)
            return redirect()->route('products.index')->with(['type'=>'danger','msg'=>'Sản phẩm không tồn tại','title'=>'Sửa sản phẩm']);
        $item->name = $request->name;
        $item->sku = $request->sku;
        $item->price = $request->price;
        $item->qty = $request->qty;
        $item->content = $request->content;
        $item->image = $request->image;
        $item->images = $request->images;
        $item->category_id = $request->category_id;
        $item->save();
        Product::where('id',$id)->update([
            "name" => $request->name,
            "sku" => $request->sku,
            "price" => $request->price,
            "qty" => $request->qty,
            "content" => $request->content,
            "image" => $request->image,
            "images" => $request->images,
            "category_id" => $request->category_id,
        ]);
        return redirect()->back()->with(['type'=>'success','msg'=>'Sửa thành công','title'=>'Sửa sản phẩm']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Product::model()->where('id',$id)->first();
        if(!$item)
            return redirect()->route('products.index')->with(['type'=>'danger','msg'=>'Sản phẩm không tồn tại','title'=>'Xóa sản phẩm']);
        // Product::where('id',$id)->update([
        //         "status" => 0
        //     ]);
        $item->status = 0;
        $item->save();
        return redirect()->back()->with(['type'=>'success','msg'=>'Xóa SKU:'.$item->sku.' thành công','title'=>'Xóa sản phẩm']);
    }
}
