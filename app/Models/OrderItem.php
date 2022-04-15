<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    protected $table = 'order_details';
    //protected $primaryKey = ['order_id','product_id'];
    public function product()
    {
        return $this->hasOne(Product::class,'id','product_id');
    }
    public function order()
    {
        return $this->hasOne('App\Models\Order','id','order_id');
    }
    public function getTotalAmountAttribute()
    {
        return $this->qty * $this->price;
    }
}
