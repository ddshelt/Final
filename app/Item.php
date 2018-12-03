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
// will need to be changed to reactions
    public function reactions() {
      return $this->belongsToMany('App\User','reactions');
    }
// likes
  public function likecount() {
    return \DB::table('reactions')
                    ->where('reaction',true)
                    ->where('item_id', $this->id)
                    ->count();
  }

//dislikes

  public function dislikecount() {
    return \DB::table('reactions')
                    ->where('reaction',false)
                    ->where('item_id', $this->id)
                    ->count();
  }
}
