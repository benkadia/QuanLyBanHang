<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;
    protected $table = 'functions';
    // parent_id là trường để xác định thèn cha của nó(id) và được dùng để show menu đa cấp ra
    // 1 parent chỉ có 1 cha duy nhất(functions)
    public function parent()
    {
        return $this->hasOne('App\Models\Feature','id','parent_id');
    }
    // 1 role có nhiều chức năng
    public function roles()
    {
        return $this->hasMany('App\Models\Role','func_id','id');
    }
    // Lấy tất cả chức năng user đang đăng nhập
    public static function listForUser($uid)
    {
        return self::where(['status'=>1, 'show_menu' =>1])
                    ->where(function($q)use($uid){
                        $q->whereHas('roles',function($q)use($uid){
                            $q->where('user_id',$uid);
                        })
                        ->orWhere('allow',1);
                    })
                    ->orderBy('parent_id')
                    ->orderBy('pos')
                    ->get();
    }
    public static function check($uid,$route)
    {
        return self::where(['status'=>1,'route'=>$route])
        ->where(function($q)use($uid){
            $q->whereHas('roles',function($q)use($uid){
                $q->where('user_id',$uid);
            })
            ->orWhere('allow',1);
        })
        ->first(['id']);
    }
}
