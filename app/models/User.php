<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function place() {
		#User has many Places
		return $this->hasMany('Place');
	}

	public function phone() {
		# User has many Phones
		return $this->hasMany('Phone');

	}

	public function pet() {
		#User has many Pets
		return $this->hasMany('Pet');
	}

	public function playdate() {
		# User belongs to many Playdates
		return $this->belongsToMany('Playdate');
	}

}
