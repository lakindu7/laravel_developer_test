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

    public function busroute()
    {
        return $this->hasOne(BusRoute::class,'bus_id','id');
    }

    public function busowner()
    {
        return $this->hasOne(BusOwner::class,'id','owner_id');
    }
}
