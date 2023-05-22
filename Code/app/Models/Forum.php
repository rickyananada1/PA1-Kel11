<?php

namespace App\Models;

use App\Models\User;
use App\Models\Komentar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;

class Forum extends Model
{
    use HasFactory;

    use Sluggable;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul'
            ]
        ];
    }
 
    protected $guarded= [];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function komentar(){
        return $this->hasMany(Komentar::class);
    }

}
