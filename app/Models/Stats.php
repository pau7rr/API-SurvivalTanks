<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Stats extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';

    protected $fillable = [
        'games',
        'users',
    ];




    protected $table = "general_stats";
}
