<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Intervention extends Model
{
    public function machines()
    {
        $this->belongsToMany('App\Models\Machine');
    }

    public function technicians()
    {
        $this->belongsToMany('App\Models\Technician');
    }

    public function interventionType()
    {
        $this->belongsTo('App\Models\InterventionType');
    }

    public function reportImages()
    {
        $this->hasMany('App\Models\ReportImage');
    }
}
