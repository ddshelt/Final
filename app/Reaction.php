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

    public function user(){

      return $this->belongsTo('App\User');
    }

    protected $fillable = ['reaction','user_id','item_id'];
}
