<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    use HasFactory;

    public function friends()
    {

        return $this->belongsToMany(Interest::class, 'friend__interests', 'interest_id', 'friend_id');

    }
}
