<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Item extends Model
{
    //
    public function comments() {

      return $this->hasMany('App\Reaction');

    }

}
