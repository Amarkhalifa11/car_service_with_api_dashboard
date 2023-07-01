<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'car',
        'service_id',
        'price',
        'time',
        'location',
        'location',
        'phone',
        'emergency',
        'status',
        'vendor_id',
        'service2',
        'service3',
        'user_id',
    ];
}
