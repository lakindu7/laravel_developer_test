<?php

namespace Modules\Bus\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BusScheduleBooking extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'bus_seat_id', 'user_id', 'bus_schedule_id', 'seat_number', 'price', 'status'
    ];
}
