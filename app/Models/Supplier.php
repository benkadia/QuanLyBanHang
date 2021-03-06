<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    public function products()
    {
        return $this->hasMany('App\Models\Product','supplier_id','id');
    }
    public static function model()
    {
        return self::where(['status'=>1]);
    }
}
