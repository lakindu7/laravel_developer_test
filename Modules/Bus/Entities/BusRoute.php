<?php

namespace Modules\Bus\Entities;

use Illuminate\Database\Eloquent\Model;

class BusRoute extends Model
{
    protected $fillable = [
        'bus_id', 'route_id', 'status'
    ];
}
