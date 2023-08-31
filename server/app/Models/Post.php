<?php

namespace App\Models;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function like(){
        return $this->hasMany(Like::class);
    }
}
