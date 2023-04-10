<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'id_paid',
        'payment_receipt'
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function transactions(){
        return $this->hasMany(Transaction::class);
    }



}
