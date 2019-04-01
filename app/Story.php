<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
	
	protected $fillable = array('title', 'introduction', 'image', 'category', 'status', 'user_id', 'image');

	    public function user(){
	
	    	return $this->belongsTo(User::class);

	    }

	
	    public function episode(){
	
	    	return $this->hasMany(Episode::class);
	
	    }
}
