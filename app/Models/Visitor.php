<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $fillable = [
        'visitor_id',
        'ip_address',
        'user_agent',
        'browser',
        'platform',
        'device_type',
        'url',
        'referer',
        'country',
        'city',
        'visit_count',
        'last_visit',
    ];

    protected $casts = [
        'last_visit' => 'datetime',
    ];
}
