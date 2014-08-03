<?php

//  app/models/Playdate

class Playdate extends Eloquent 
{

	public function user() {
		# Playdate belongs to many Users
		return $this->belongsToMany('User');
	}

	public function pet(){
		# Playdate belongs to many Pets
		return $this->belongsToMany('Pet');
	}

	public function place() {
		# Playdate belongs to a Place
		return $this->belongsTo('Place');
	}
}