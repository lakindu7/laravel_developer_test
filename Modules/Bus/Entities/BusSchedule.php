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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function busroute()
    {
        return $this->hasOne(BusRoute::class,'id','bus_route_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function busschedulebooking()
    {
        return $this->hasOne(BusScheduleBooking::class,'bus_schedule_id','id');
    }
}
