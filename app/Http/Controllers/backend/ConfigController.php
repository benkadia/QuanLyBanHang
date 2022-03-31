<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Config;
use Illuminate\Http\Request;
class ConfigController extends Controller
{
    public function edit()
    {
        return view('backend.config.form',['title'=>'Cập nhật cấu hình']);
    }
    public function update(Request $request)
    {
        if($request->configs)
        {
            foreach($request->configs as $key=>$value)
            {
                Config::where('key',$key)->update(['value'=>$value]);
            }
        }
        return redirect()->back()->with(['type'=>'success','msg'=>'Ghi thành công','title'=>'Cập nhật cấu hình']);
    }
}
