<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    use HasFactory;
    public static function getByKey($key)
    {
        // trả về dữ liệu theo key
        return self::where('key',$key)->first();
    }
    public static function getList()
    {
        return self::get(['key','value','type','summary'])->keyby('key');
    }
}
