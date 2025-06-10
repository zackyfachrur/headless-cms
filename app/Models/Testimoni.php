<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    protected $fillable = [
        "client_comment",
        "client_email",
        "client_name",
        "client_web",
        "comment_status",
    ];
}
