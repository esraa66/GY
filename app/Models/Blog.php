<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public $table = 'blogs';

    public $fillable = [
        'title',
        'article',
        'image',
    ];

    public $transcodeColumns = [
        'title',
        'article',
    ];
}
