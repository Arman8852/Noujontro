<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LevelTerm extends Model
{
    public function subjects(){

      return $this->hasMany('App\Subject','level_id');

    }
}
