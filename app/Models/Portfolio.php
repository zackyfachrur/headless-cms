<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
        'title',
        'description',
        'category',
        'category_label',
        'image',
        'demo_url',
        'demo_username',
        'demo_password',
        'in_progress',
        'progress',
        'progress_note',
        'detail_url',
    ];
}
