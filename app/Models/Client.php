<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function user()
    {
        $this->belongsTo('App\Models\User');
    }

    public function machines()
    {
        $this->hasMany('App\Models\Machine');
    }
}
