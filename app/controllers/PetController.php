<?php

class PetController extends BaseController {

	public function __construct() {
		$this->beforeFilter('auth');
	}

	public function getAdd(){
		$this->beforeFilter('auth');
		
		$data['user'] = Auth::user();
		$data['include'] = 'add_pet';
		return View::make('add_pet', $data);
	
	}

	public function postAdd(){
	$user = User::with('place','pet')
		->where('id', '=', Input::get('user_id'))
		->first();
	$pet= new pet;
	$pet->pet_name  = Input::get('pet_name');
	$pet->breed   = Input::get('breed');
	$pet->weight   = Input::get('weight');
	$pet->birthdate      = Input::get('birthdate');
	$pet->user()->associate($user);
	$pet->save();
	
	$data['user']=$user;
	return Redirect::to('user/dashboard')
		->with('flash_message', "Pet Succesfully added");
	}


	public function getSeed(){
		$pet= new pet;
		$pet->pet_name  = 'Rover';
		$pet->breed   = 'Greyhound';
		$pet->weight   = 70;
		$pet->birthdate  = '2007/2/4';
		$pet->user_id   = 1;
		$pet->save();

		$pet= new pet;
		$pet->pet_name  = 'Leika';
		$pet->breed   = 'Greyhound';
		$pet->weight   = 65;
		$pet->birthdate  = '2007/4/30';
		$pet->user_id   = 1;
		$pet->save();

		$pet= new pet;
		$pet->pet_name  = 'Griffin';
		$pet->breed   = 'Golden Retriever';
		$pet->weight   = 65;
		$pet->birthdate       = '2010/3/14';
		$pet->user_id   = 2;
		$pet->save();

		$pet= new pet;
		$pet->pet_name  = 'Jack';
		$pet->breed   = 'French Bulldog';
		$pet->weight   = 22;
		$pet->birthdate       = '2013/9/9';
		$pet->user_id   = 2;
		$pet->save();

		$pet= new pet;
		$pet->pet_name  = 'Kruze';
		$pet->breed   = 'German Sheppard';
		$pet->weight   = 85;
		$pet->birthdate       = '2011/5/2'; 
		$pet->user_id   = 3;
		$pet->save();

		$pet= new pet;
		$pet->pet_name  = 'Maddie';
		$pet->breed   = 'Black lab';
		$pet->weight   = 60;
		$pet->birthdate       = '2013/3/1'; 
		$pet->user_id   = 3;
		$pet->save();

		$pet= new pet;
		$pet->pet_name  = 'Spirit';
		$pet->breed   = 'Shitzu';
		$pet->weight   = 12;
		$pet->birthdate      = '2009/4/4';
		$pet->user_id   = 4;
		$pet->save();

		$pet= new pet;
		$pet->pet_name  = 'Sandy';
		$pet->breed   = 'Skye Terrier';
		$pet->weight   = 18;
		$pet->birthdate = '2012/8/17';
		$pet->user_id   = 5;
		$pet->save();

		return ('Pets seeded');
	}
}