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


	
}