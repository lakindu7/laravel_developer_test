<?php

namespace Modules\SuperAdmin\Entities;

use Illuminate\Database\Eloquent\Model;

class SuperAdmin extends Model
{
    protected $fillable = [ 'name', 'email', 'password'];
}
