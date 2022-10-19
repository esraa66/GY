<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    use HasFactory;

    public $table = 'developers';

    public $fillable = [
        'name',
        'logo',
        'phone',
        'fax',
        'site',
    ];
}
