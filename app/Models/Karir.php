<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Karir extends Model
{
    protected $fillable = [
            'job_title',
            'job_location',
            'job_description',
            'job_status',
            'job_requirements',
    ];

    protected $casts = [
        'job_requirements' => 'array',
    ];
}
