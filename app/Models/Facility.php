<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    protected $fillable = [
        'area_name',
        'floor_number',
        'area_number',
        'area_type',
        'has_wifi',
        'has_power_outlet',
        'status',
        'description',
    ];
}