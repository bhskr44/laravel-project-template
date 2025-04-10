<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicationEvents extends Model
{
    //

    protected $fillable =[
        'service_code',
        'version_code',
        'event_name',
        'priority',
    ];
}
