<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
	protected $fillable = array('title', 'text', 'story_id', 'user_id');

	    public function user(){

	
	    	return $this->belongsTo(User::class);
	    }

	
	    public function story(){
	
	    	return $this->belongsTo(Story::class);
	
	    }
}
