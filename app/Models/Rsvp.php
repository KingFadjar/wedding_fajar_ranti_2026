<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rsvp extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'institution',
        'attendance',
        'guest_count',
        'message',
        'ip_address',
        'user_agent',
    ];

    protected $casts = [
        'guest_count' => 'integer',
    ];
}
