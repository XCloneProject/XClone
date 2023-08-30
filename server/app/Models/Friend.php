<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Friend extends Model
{
    use HasFactory;

   protected $fillable=[
    'user_id1','user_id2'
    
   ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
