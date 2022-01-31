<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTank extends Model
{
    use HasFactory;

    protected $fillable = [
        'strengh',
        'health',
        'speed',
        'tower',
        'body',
        'track',
        'bullet'
    ];
}
