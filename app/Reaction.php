<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Reaction extends Model
{
    //
    public function items(){

      return $this->belongsTo('App\Item');
    }
}
