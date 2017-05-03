<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    public function institutions() {
        return $this->belongsToMany('App\Institution')->withTimestamps();
    }

    public static function getSportsForCheckboxes() {
        $sports = Sport::orderBy('categories','ASC')->get();
        $sportsForCheckboxes = [];
        foreach($sports as $sport) {
            $sportsForCheckboxes[$sport['id']] = $sport->categories;
        }
        return $sportsForCheckboxes;
    }
}
