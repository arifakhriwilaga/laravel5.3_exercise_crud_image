<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Officer;


class Comment extends Model
{
     protected $fillable = ['content', 'officer_id','author'];
  

     public function article() {

    return $this->belongsTo('App\Officer', 'officer_id');

  }
}



