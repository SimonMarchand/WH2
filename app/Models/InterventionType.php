<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InterventionType extends Model
{
    public function tools()
    {
        $this->belongsToMany('App\Models\Tool');
    }
}
