<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Intervention extends Model
{
    public function machine()
    {
        $this->belongsTo('App\Models\Machine');
    }
}
