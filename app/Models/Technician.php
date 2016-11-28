<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Technician extends Model
{
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function interventions()
    {
        return $this->belongsToMany('App\Models\Intervention');
    }
}
