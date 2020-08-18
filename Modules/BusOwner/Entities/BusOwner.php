<?php

namespace Modules\BusOwner\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Bus\Entities\Bus;

class BusOwner extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name', 'email', 'password'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function buses()
    {
        return $this->hasMany(Bus::class,'owner_id','id');
    }
}
