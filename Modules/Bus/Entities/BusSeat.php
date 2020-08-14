<?php

namespace Modules\Bus\Entities;

use Illuminate\Database\Eloquent\Model;

class BusSeat extends Model
{
    protected $fillable = [
        'seat_number', 'price', 'bus_id'
    ];
}
