<?php

// app/models/Pet.php

class Pet extends Eloquent
{

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	
	public function user() {
		#Pet belongs to User
		return $this->belongsTo('User');
	}

	public function playdate() {
		# Pet belongs to many Playdates
		return $this->belongsToMany('Playdates');
	}
}