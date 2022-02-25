<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoloStats extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'games',
        'highest_round',
        'kills',
    ];
}
