<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Mail;
use App\Models\Config;
class RoleController extends Controller
{
    public function index()
    {
        $list = User::where(['status'=>1])->paginate(10);
        return view('backend.role.index',['list'=>$list]);
    }
    public function access($id)
    {
        $user = User::where(['status'=>1,'id'=>$id])->first();
        if(!$user)
            return redirect()->route('role.index');
        $list = Feature::where('status',1)->where('allow','!=',1)
        ->orderBy('parent_id')
        ->orderBy('pos')
        ->get();
        $list = collect($list);
        $roles = Role::where('user_id',$user->id)->get()->keyBy('func_id');
        //dd($list->where('parent_id',12));
        return view('backend.role.access',['user'=>$user,'list'=>$list,'roles'=>$roles]);
    }
    public function accessPut(Request $request,$id)
    {
        $user = User::where(['status'=>1,'id'=>$id])->first();
        if(!$user)
            return redirect()->route('role.index');
        Role::where('user_id',$user->id)->delete();
        if($request->funcs)
        {
            $fills = [];
            foreach($request->funcs as $func)
            {
                $fills[] = ['user_id'=>$user->id,'func_id'=>$func];
            }
            //dd($fills);
            Role::insert($fills);
        }
        return redirect()->back()->with(['msg'=>'ghi thanh cong','type'=>'success','title'=>'cap quyen']);
    }
}
