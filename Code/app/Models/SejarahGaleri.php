<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SejarahGaleri extends Model
{
    use HasFactory;

    protected $fillable = [
        'galeri',
        'sejarah_desa',
    ];
}
