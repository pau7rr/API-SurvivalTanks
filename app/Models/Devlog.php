<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devlog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'version',
        'summary',
        'content',
        'publication_date',
        'thumbnail_url',
        'image_url'
    ];
}
