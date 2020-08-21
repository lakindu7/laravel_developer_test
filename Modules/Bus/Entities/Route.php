<?php

namespace Modules\Bus\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Route extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'node_one', 'node_two', 'route_number', 'distance', 'time'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function busroute()
    {
        return $this->hasMany(BusRoute::class,'route_id','id');
    }
}
