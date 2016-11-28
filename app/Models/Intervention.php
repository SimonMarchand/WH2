<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Intervention extends Model
{
    public function machine()
    {
        $this->belongsTo('App\Models\Machine');
    }

    public function technician()
    {
        $this->belongsTo('App\Models\Technician');
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
