<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $list = Category::model()->where('name','like','%'.$request->key.'%')->paginate(10);
        $total = $list->total();
        return view('backend.category.list',['list'=>$list,'total'=>$total]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = Category::model()->get();
        return view('backend.category.form',['cats'=>$cats,'action'=>route('categories.store'),'title'=>'Thêm danh mục sản phẩm','method'=>'POST']);
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
        ]);
        Category::insert([
            "name" => $request->name,
            "summary" => $request->summary,
            "alias" => $request->alias,
            "keyword" => $request->keyword,
            "description" => $request->description,
            "image" => $request->image,
            "title" => $request->title,
        ]);
        return redirect()->back()->with(['type'=>'success','msg'=>'Thêm thành công','title'=>'Thêm danh mục sản phẩm']);
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
        $cats = Category::model()->where('id',$id)->first();
        if(!$cats)
            return redirect()->route('categories.index')->with(['type'=>'danger','msg'=>'Danh mục không tồn tại','title'=>'Sửa Danh Mục']);
        return view('backend.category.form',['cats'=>$cats,'action'=>route('categories.update',$id),'title'=>'Sửa danh mục '.$cats['name'],'method'=>'PUT']);
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
        $item = Category::model()->where('id',$id)->first();
        if(!$item)
            return redirect()->route('categories.index')->with(['type'=>'danger','msg'=>'Danh mục không tồn tại','title'=>'Sửa Danh mục']);
        //Gán giá trị
        $item->name = $request->name;
        $item->summary = $request->summary;
        $item->alias = $request->alias;
        $item->keyword = $request->keyword;
        $item->description = $request->description;
        $item->image = $request->image;
        $item->title = $request->title;
        $item->save();
        // Lưu vào DB
        Category::where('id',$id)->update([
            "name" => $request->name,
            "summary" => $request->summary,
            "alias" => $request->alias,
            "keyword" => $request->keyword,
            "description" => $request->description,
            "image" => $request->image,
            "title" => $request->title,
        ]);
        return redirect()->back()->with(['type'=>'success','msg'=>'Sửa thành công','title'=>'Sửa Danh Mục']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Category::model()->where('id',$id)->first();
        if(!$item)
            return redirect()->back()->with(['type'=>'danger','msg'=>'Danh mục không tồn tại','title'=>'Xoá Danh mục']);
        $item->status = 0;
        $item->save();
        return redirect()->back()->with(['type'=>'success','msg'=>'Xoá thành công','title'=>'Xoá Danh Mục']);
    }
}
