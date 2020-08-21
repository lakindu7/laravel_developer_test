<?php

namespace Modules\Bus\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\User\Entities\User;

class BusScheduleBooking extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'bus_seat_id', 'user_id', 'bus_schedule_id', 'seat_number', 'price', 'status'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function busseat()
    {
        return $this->hasOne(BusSeat::class,'id','bus_seat_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function busschedule()
    {
        return $this->hasOne(BusSchedule::class,'id','bus_schedule_id');
    }
}
