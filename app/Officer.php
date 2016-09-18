<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Comment;

class Officer extends Model
{
    protected $fillable = ['name','image','title_image','description_image'];

public function comments(){
	return $this->hasMany('App\Comment', 'officer_id');
}

}

