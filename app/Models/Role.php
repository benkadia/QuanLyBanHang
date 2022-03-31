<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Role là bảng trung gian để kết nối bảng user với bảng function
class Role extends Model
{
    use HasFactory;
    protected $table = 'roles';

    // Một Role chỉ được duy nhất một feature(chức năng) sử dụng
    public function feature()
    {
        return $this->hasOne('App\Models\Feature','id','func_id');
    }
    // Một Role chỉ được sử dụng bở một user
    public function user()
    {
        return $this->hasOne('App\Models\User','id','user_id');
    }
    public function _insert($user_id,$f_id)
    {
        // $sql = "INSERT INTO `roles` (`user_id`, `func_id`) VALUES (?, ?);";
        return self::insert('user_id'.$user_id,'func_id'.$f_id);
    }
    public function delete_($user_id)
    {
        // $sql = "delete from `roles`  where `user_id` = ?";
        return self::where('user_id',$user_id)->delete();
    }
}
