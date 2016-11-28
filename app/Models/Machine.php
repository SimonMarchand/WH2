<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    public function client()
    {
        $this->belongsTo('App\Models\Client');
    }

    public function interventions()
    {
        $this->hasMany('App\Models\Intervention');
    }
}
