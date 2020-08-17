<?php

namespace Modules\Bus\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BusSeat extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'seat_number', 'price', 'bus_id'
    ];
}
