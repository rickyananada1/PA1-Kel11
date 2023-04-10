<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_id',
        'amount'
    ];

    public function orders(){
        return $this->hasOne(Order::class);
    }

    public function products(){
        return $this->belongsTo(Product::class);
    }

}
