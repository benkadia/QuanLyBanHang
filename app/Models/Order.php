<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
class Order extends Model
{
    use HasFactory;
    public function customer()
    {
        return $this->hasOne('App\Models\Customer','id','customer_id');
    }
    public function items()
    {
        return $this->hasMany('App\Models\OrderItem','order_id','id');
    }
    //add them thuoc tinh k co trong cot cua table
    public function getCusnameAttribute()
    {
        return $this->customer->fullname??'';
    }
}
