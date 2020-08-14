<?php

namespace Modules\Bus\Entities;

use Illuminate\Database\Eloquent\Model;

class BusSchedule extends Model
{
    protected $fillable = [
        'direction', 'start_timestamp', 'end_timestamp', 'bus_route_id'
    ];
}
