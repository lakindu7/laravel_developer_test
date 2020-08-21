<?php

namespace Modules\Bus\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\BusOwner\Entities\BusOwner;

class Bus extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'type', 'vehicle_number', 'owner_id'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     *
     *  This returns Route details of Bus
     */
    public function busroute()
    {
        return $this->hasOne(BusRoute::class,'bus_id','id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     *
     * This return Owner details of Bus
     */
    public function busowner()
    {
        return $this->hasOne(BusOwner::class,'id','owner_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     *
     * This returns seat details of Bus
     */
    public function busseat()
    {
        return $this->hasMany(BusSeat::class,'bus_id','id');
    }
}
