<?php

// app/models/Place.php

class Place extends Eloquent
{

	public function user() {

		#place belongs to user
		return $this->belongsTo('User');
	}

	public function playdate() {

		# Place has many Playdates
		return $this->hasMany('Playdate');
	}
}