<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public function namefiles(){

      return $this->hasMany('App\NameFile','subject_id');

    }

public function level()
    {
       return $this->belongsTo('App\LevelTerm','level_id');
    }

}
