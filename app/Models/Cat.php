<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $fillable = [
        'name',
        'photo',
        'approx_age',
        'description',
        'user_id',

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
