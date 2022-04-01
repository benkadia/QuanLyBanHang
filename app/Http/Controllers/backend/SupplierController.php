<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $list = Supplier::model()->where('name','like','%'.$request->key.'%')->paginate(10);
        $total = $list->total();
        return view('backend.supplier.list',['list'=>$list,'total'=>$total]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = Supplier::model()->get();
        return view('backend.supplier.form',['cats'=>$cats,'action'=>route('suppliers.store'),'title'=>'Thêm Nhà Cung Cấp','method'=>'POST']);
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
            'name' => ['required','string','min:2','max:100'],
            'summary' => ['required'],
            'alias' => ['required'],
            'keyword' => ['required','min:2','max:255'],
            'description' => ['required','string','max:255'],
            'title' => ['required'],
            'phone' => ['required','digits:10'],
            'email' => ['required','email'],
        ],[
            'name.required' => 'Tên không được để trống',
            'name.min' => 'Tên min từ [2,100]',
            'name.max' => 'Tên max từ [2,100]',
            'summary.required' => 'Tóm tắt không được để trống',
            'alias.required' => 'Tên riêng không được để trống',
            'keyword.required' => 'Từ khoá  không được để trống',
            'keyword.min' => 'Từ khoá min từ [2,100]',
            'keyword.max' => 'Từ khoá max từ [2,255]',
            'description.required' => 'Mô tả không được để trống',
            'description.max' => 'Mô tả max là 255',
            'title.required' => 'Tiêu đề không được để trống',
            'phone.required' => 'Số điện thoại không được để trống',
            'phone.digits' => 'Số điện thoại phải từ 10 ký tự',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email thuộc kiểu email',
        ]);
        Supplier::insert([
            "name" => $request->name,
            "summary" => $request->summary,
            "alias" => $request->alias,
            "keyword" => $request->keyword,
            "description" => $request->description,
            "image" => $request->image,
            "title" => $request->title,
            "phone" => $request->phone,
            "email" => $request->email,
        ]);
        return redirect()->back()->with(['type'=>'success','msg'=>'Thêm thành công','title'=>'Thêm Nhà Cung Cấp']);
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
        $sups = Supplier::model()->where('id',$id)->first();
        if(!$sups)
            return redirect()->route('suppliers.index')->with(['type'=>'danger','msg'=>'Nhà cung cấp không tồn tại','title'=>'Sửa Nhà cung cấp']);
        return view('backend.supplier.form',['sups'=>$sups,'action'=>route('suppliers.update',$id),'title'=>'Sửa Nhà cung cấp '.$sups['name'],'method'=>'PUT']);
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
        $item = Supplier::model()->where('id',$id)->first();
        if(!$item)
            return redirect()->route('suppliers.index')->with(['type'=>'danger','msg'=>'Nhà cung cấp không tồn tại','title'=>'Sửa Nhà cung cấp']);
        //Gán giá trị
        $item->name = $request->name;
        $item->summary = $request->summary;
        $item->alias = $request->alias;
        $item->keyword = $request->keyword;
        $item->description = $request->description;
        $item->image = $request->image;
        $item->title = $request->title;
        $item->phone = $request->phone;
        $item->email = $request->email;
        $item->save();
        // Lưu vào DB
        Supplier::where('id',$id)->update([
            "name" => $request->name,
            "summary" => $request->summary,
            "alias" => $request->alias,
            "keyword" => $request->keyword,
            "description" => $request->description,
            "image" => $request->image,
            "title" => $request->title,
            "phone" => $request->phone,
            "email" => $request->email,
        ]);
        return redirect()->back()->with(['type'=>'success','msg'=>'Sửa thành công','title'=>'Sửa Nhà Cung Cấp']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Supplier::model()->where('id',$id)->first();
        if(!$item)
            return redirect()->back()->with(['type'=>'danger','msg'=>'Nhà cung cấp không tồn tại','title'=>'Xoá Nhà cung cấp']);
        $item->status = 0;
        $item->save();
        return redirect()->back()->with(['type'=>'success','msg'=>'Xoá thành công','title'=>'Xoá Nhà cung cấp']);
    }
}
