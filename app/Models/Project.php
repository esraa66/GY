<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public $table = 'projects';
    public $fillable = [
        'name',
        'description',
        'code',
        'area',
        'location',
        'pdf',
        'price',
        'pay_plan',
        'location_id',
        'area_id',
        'status_id',
        'type_id'
    ];
    public $transcodeColumns = [
        'name',
        'description',
    ];
}
