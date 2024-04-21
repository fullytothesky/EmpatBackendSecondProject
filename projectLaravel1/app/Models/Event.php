<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['meetingPlace', 'date'];
    public function user():BelongsTo
    {
        return $this->belongsTo(Friend::class, 'friend_id', 'id');
    }
}
