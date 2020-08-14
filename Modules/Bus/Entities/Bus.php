<?php

namespace Modules\Bus\Entities;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    protected $fillable = [
        'name', 'type', 'vehical_number', 'owner_id'
    ];
}
