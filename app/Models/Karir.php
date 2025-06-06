<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Karir extends Model
{
    protected $fillable = [
            'slug',
            'job_title',
            'job_location',
            'job_division',
            'job_description',
            'job_deadline',
            'job_status',
            'job_requirements',
            'slug',
    ];

    protected $casts = [
        'job_requirements' => 'array',
    ];
}
