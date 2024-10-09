<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'event_date', 'place', 'capacity', 'description', 'creator_id',
    ];

    // Relasi ke User (creator)
    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

    // Relasi ke Users melalui Participants
    public function participants()
    {
        return $this->belongsToMany(User::class, 'participant')
                    ->withTimestamps()
                    ->withPivot('joined_at');
    }


}
