<?php

namespace Modules\User\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Bus\Entities\BusScheduleBooking;

class User extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name', 'email', 'password'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function busschedulebooking()
    {
        return $this->hasMany(BusScheduleBooking::class,'user_id','id');
    }
}
