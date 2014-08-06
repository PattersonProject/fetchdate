<?php
	
	class PetTableSeeder extends Seeder {

	public function run(){

		DB::statement('TRUNCATE pets');

		$pet= new Pet;
		$pet->pet_name  = 'Rover';
		$pet->breed   = 'Greyhound';
		$pet->weight   = 70;
		$pet->birthdate  = strtotime('2007/2/4');
		$pet->user_id   = 1;
		$pet->save();

		$pet= new Pet;
		$pet->pet_name  = 'Leika';
		$pet->breed   = 'Greyhound';
		$pet->weight   = 65;
		$pet->birthdate  = strtotime('2007/4/30');
		$pet->user_id   = 1;
		$pet->save();

		$pet= new Pet;
		$pet->pet_name  = 'Griffin';
		$pet->breed   = 'Golden Retriever';
		$pet->weight   = 65;
		$pet->birthdate       = strtotime('2010/3/14');
		$pet->user_id   = 2;
		$pet->save();

		$pet= new Pet;
		$pet->pet_name  = 'Jack';
		$pet->breed   = 'French Bulldog';
		$pet->weight   = 22;
		$pet->birthdate       = strtotime('2013/9/9');
		$pet->user_id   = 2;
		$pet->save();

		$pet= new Pet;
		$pet->pet_name  = 'Kruze';
		$pet->breed   = 'German Sheppard';
		$pet->weight   = 85;
		$pet->birthdate       = strtotime('2011/5/2'); 
		$pet->user_id   = 3;
		$pet->save();

		$pet= new Pet;
		$pet->pet_name  = 'Maddie';
		$pet->breed   = 'Black lab';
		$pet->weight   = 60;
		$pet->birthdate       = strtotime('2013/3/1'); 
		$pet->user_id   = 3;
		$pet->save();

		$pet= new Pet;
		$pet->pet_name  = 'Spirit';
		$pet->breed   = 'Shitzu';
		$pet->weight   = 12;
		$pet->birthdate      = strtotime('2009/4/4');
		$pet->user_id   = 4;
		$pet->save();

		$pet= new Pet;
		$pet->pet_name  = 'Sandy';
		$pet->breed   = 'Skye Terrier';
		$pet->weight   = 18;
		$pet->birthdate = strtotime('2012/8/17');
		$pet->user_id   = 5;
		$pet->save();

		
	}
}