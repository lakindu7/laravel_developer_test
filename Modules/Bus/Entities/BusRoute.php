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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     *
     * This returns all buses of route
     */
    public function buses()
    {
        return $this->hasMany(Bus::class,'id','bus_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function route()
    {
        return $this->hasOne(Route::class,'id','route_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function busschedule()
    {
        return $this->hasMany(BusSchedule::class,'bus_route_id','id');
    }
}
