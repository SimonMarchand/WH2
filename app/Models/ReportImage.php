<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReportImage extends Model
{
    public function intervention()
    {
        $this->belongsTo('App\Models\Intervention');
    }
}
