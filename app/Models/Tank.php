<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tank extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    
    protected $fillable = [ 
        'strengh',
        'health',
        'speed',
        'tower',
        'body',
        'track',
        'bullet',
    ];
}
