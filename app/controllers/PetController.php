<?php

class PetController extends BaseController {

	public function __construct() {

	}

	public function getSeed(){
		$pet= new pet;
		$pet->pet_name  = 'Rover';
		$pet->breed   = 'Greyhound';
		$pet->weight   = 70;
		$pet->birthdate  = '2/24/2007';
		$pet->user_id   = 1;
		$pet->save();

		$pet= new pet;
		$pet->pet_name  = 'Leika';
		$pet->breed   = 'Greyhound';
		$pet->weight   = 65;
		$pet->birthdate  = '4/30/2007';
		$pet->user_id   = 1;
		$pet->save();

		$pet= new pet;
		$pet->pet_name  = 'Griffin';
		$pet->breed   = 'Golden Retriever';
		$pet->weight   = 65;
		$pet->birthdate       = '3/14/2010';
		$pet->user_id   = 2;
		$pet->save();

		$pet= new pet;
		$pet->pet_name  = 'Jack';
		$pet->breed   = 'French Bulldog';
		$pet->weight   = 22;
		$pet->birthdate       = '9/9/2013';
		$pet->user_id   = 2;
		$pet->save();

		$pet= new pet;
		$pet->pet_name  = 'Kruze';
		$pet->breed   = 'German Sheppard';
		$pet->weight   = 85;
		$pet->birthdate       = '5/2/2011'; 
		$pet->user_id   = 3;
		$pet->save();

		$pet= new pet;
		$pet->pet_name  = 'Maddie';
		$pet->breed   = 'Black lab';
		$pet->weight   = 60;
		$pet->birthdate       = '3/1/2013'; 
		$pet->user_id   = 3;
		$pet->save();

		$pet= new pet;
		$pet->pet_name  = 'Spirit';
		$pet->breed   = 'Shitzu';
		$pet->weight   = 12;
		$pet->birthdate      = '4/4/2009';
		$pet->user_id   = 4;
		$pet->save();

		$pet= new pet;
		$pet->pet_name  = 'Sandy';
		$pet->breed   = 'Skye Terrier';
		$pet->weight   = 18;
		$pet->birthdate = '8/17/2012';
		$pet->user_id   = 5;
		$pet->save();

		return ('Pets seeded');
	}
}