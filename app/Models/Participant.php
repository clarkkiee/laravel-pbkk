<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = [
        'event_id',
        'user_id',
        'joined_at',
    ];

    public $timestamps = false;

    // relasi ke user
    public function user(){
        return $this->belongsTo(User::class);
    }

    // relasi ke event
    public function event(){
        return $this->belongsTo(Event::class);
    }
}
