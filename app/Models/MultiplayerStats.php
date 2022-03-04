<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MultiplayerStats extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'games',
        'kills',
        'deaths',
        'time_played',
        'shots',
        'successful_shots',
    ];
}
