<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public static function model(){
        return self::where('status','!=',0);
    }
    // quan he model
    public function category()
    {
        return $this->hasOne('App\Models\Category','id','category_id');
    }
    public function supplier()
    {
        return $this->hasOne('App\Models\Supplier','id','supplier_id');
    }
    //add them thuoc tinh k co trong cot cua table
    public function getNameCatAttribute()
    {
        return $this->category->name??'';
    }
    // protected function firstName(): Attribute
    // {
    //     // return Attribute::make(
    //     //     get: fn ($value) => ucfirst($value),
    //     // );
    //     // return Attribute::get(function($value){
    //     //     return $this->category->name??'';
    //     // });
    //     //Attribute::make();
    // }
}
