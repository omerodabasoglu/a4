<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    public function sports() {
        return $this->belongsToMany('App\Sport')->withTimestamps();
    }
}
