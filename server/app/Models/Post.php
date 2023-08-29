<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'content', 'genre', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function fichiers() {
        return $this->hasMany(Fichiers::class);
    }
}
