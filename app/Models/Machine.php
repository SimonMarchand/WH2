<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    public function client()
    {
        return $this->belongsTo('App\Models\Client');
    }

    public function interventions()
    {
        return $this->belongsToMany('App\Models\Intervention');
    }
}
