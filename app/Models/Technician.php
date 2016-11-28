<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Technician extends Model
{
    public function user()
    {
        $this->belongsTo('App\Models\User');
    }

    public function interventions()
    {
        $this->hasMany('App\Models\Intervention');
    }
}
