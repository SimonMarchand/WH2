<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InterventionType extends Model
{
    public function tools()
    {
        return $this->belongsToMany('App\Models\Tool');
    }
}
