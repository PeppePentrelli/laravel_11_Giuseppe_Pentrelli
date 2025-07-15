<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Story extends Model
{
      protected $fillable = [
        'immagine',
        'testimonianza',
        'user_id',
         'title',
    ];

        public function user()
    {
        return $this->belongsTo(User::class);
    }
}
