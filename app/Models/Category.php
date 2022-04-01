<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function products()
    {
        return $this->hasMany('App\Models\Product','category_id','id');
    }
    public static function model()
    {
        return self::where(['status'=>1]);
    }
    // public function getQtyAttribute()
    // {
    //     return $this->products->count()??0;
    // }
}
