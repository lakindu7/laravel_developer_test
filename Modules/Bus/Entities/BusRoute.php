<?php

namespace Modules\Bus\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BusRoute extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'bus_id', 'route_id', 'status'
    ];
}
