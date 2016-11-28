<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Intervention extends Model
{
    public function machines()
    {
        return $this->belongsToMany('App\Models\Machine');
    }

    public function technicians()
    {
        return $this->belongsToMany('App\Models\Technician');
    }

    public function interventionType()
    {
        return $this->belongsTo('App\Models\InterventionType');
    }

    public function reportImages()
    {
        return $this->hasMany('App\Models\ReportImage');
    }
}
