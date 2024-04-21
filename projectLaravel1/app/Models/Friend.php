<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    use HasFactory;

    public function events()
    {
        return $this->hasMany(Event::class, 'friend_id', 'id');
    }

    public function interests()
    {
        return $this->belongsToMany(Interest::class, 'friend__interests', 'friend_id', 'interest_id');
    }

}
