<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cauhinh extends Model
{
    use HasFactory;
    protected $table = 'cauhinh';
    protected $primaryKey = 'ma';
    public $timestamps  = false;
}
