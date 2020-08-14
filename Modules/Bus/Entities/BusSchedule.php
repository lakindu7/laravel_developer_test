<?php

namespace Modules\Bus\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BusSchedule extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'direction', 'start_timestamp', 'end_timestamp', 'bus_route_id'
    ];
}
