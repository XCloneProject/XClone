<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fichiers extends Model
{
    use HasFactory;
    protected $fillable = [
        'fichier','post_id'
    ];

    public function posts() {
        return $this->belongsTo(Post::class);
    }
}
