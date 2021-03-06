<?php

class PlaydateController extends BaseController {

	public function __construct() {
		$this->beforeFilter('auth');
	}

	public function getAdd() {
		$user = Auth::user();
		$data['user'] = User::with('place','pet')
			->where('id', '=', $user['id'])
			->first();
		return View::make('add_playdate', $data);
	}

	public function postAdd() {
	
		$user = User::with('pet')
			->where('id', '=', Input::get('user_id'))
			-> first();
		if (Input::get('public') == 'true'){
			$public="true";
		}else{
			$public="false";
		}

		$playdate= new Playdate;
		$playdate->date  = Input::get('year').'-'.Input::get('month').'-'.Input::get('day');	
		$playdate->start_time   = Input::get('start_time');
		$playdate->end_time    = Input::get('end_time');
		$playdate->public    = 	$public;
		$playdate->additional_info    = Input::get('additional_info');
		$playdate->place_id      = Input::get('place');
		$playdate->save();

		# attach many to many relationships
		$playdate->user()->attach($user);
		# attach all pets of a user to their playdate
		foreach($user['pet'] as $pet ){
			$playdate->pet()->attach($pet);
		}

		return Redirect::to('user/dashboard');
	}

	public function getSearch() {
		$user = Auth::user();
		$data['user'] = User::with('place','pet')
			->where('id', '=', $user['id'])
			->first();
		return View::make('find_playdate', $data);
	}

	public function getResults(){
		# get home coordinates
		$home = Place::where('id', '=', Input::get('placeFrom'))
			->first();
		$homeCoordinate = Geotools::coordinate(array(
			$home['lat'],
			$home['lng']));
		$places = Place::all();

		# find places within specified distance from home
		foreach($places as $place){
			
			# get places coordinates
			$placeCoordinate = Geotools::coordinate(array(
				$place['lat'],
				$place['lng']));
			$distance = sprintF (Geotools::distance()
				->setFrom($homeCoordinate)->setTo($placeCoordinate)
				->in('mi')->flat());
		 	
		 	# if they meet search requirements add to $playPlaces dataset
		 	if ($distance <= Input::get('distance')) {
		 		$playPlaces[] = $place;
		 	}

		}

		# for each playPlace find any playdates in the future, at that place
		#  Can this be Nested in the if $distance statement above?
		foreach($playPlaces as $playPlace){
		
			$playdates = Playdate::with('place')
				->where('place_id', '=', $playPlace['id'])
				->where('date', '>', date('Y-m-d'))
				->get();
			#if there are playdates at this place add it to results	
			if (!($playdates->isEmpty())){
				foreach($playdates as $playdate){
					$results[]=$playdate;
				}
			}
		
		}
		
		#get data to send to form
		$user = Auth::user();
		$data['user'] = User::with('place','pet')
			->where('id', '=', $user['id'])
			->first();	
		if (isset($results)){	
			$data['results']=$results;	
		}else{
			return Redirect::to('playdate/search')
				->with('flash_message', "No Playdates found in your area, Please try again!");
		}
		return View::make('pet_to_playdate',$data);
	}

	
	public function postAdded() {
		
		$pet_id = Input::get('pet_id');
		$playdate_id = Input::get('playdate_id');
		foreach ($pet_id as $pet){
			$petAdd = Pet::where('id', '=', $pet)
				->first();
			foreach($playdate_id as $playdate) {
				$playdateAdd = Playdate::where('id', '=', $playdate)->first();
				$playdateAdd->pet()->attach($petAdd);
			}
		}
		$input = Input::all();
		echo Paste\Pre::r($input);

		return Redirect::to('user/dashboard')
			->with('message','Playdates added');
	}

	public function getSeed(){
		$faker = Faker\factory::create();
	

		for ($i=0; $i < 15; $i++){

			$user = User::whereId(rand(1, 6))
				->first();
			$pets = Pet::where('user_id', '=', $user['id'])
				->get();
			$place = Place::where('user_id', '=', $user['id'])
				->take(1)
				->first();

				echo "user id ".$user['id'];
				echo "place id ".$place['id']."!";
		
			$playdate= new Playdate;
				$datetime= $faker->dateTimeBetween($startDate='now', $endDate='+30 days'); #get fake dateTime
			$playdate->date  = $datetime->format('Y-m-d');	
			$playdate->start_time   = $datetime->format('h:i A');
				$datetime->modify('+1 hour'); # Set end time 1 hour after start time
			$playdate->end_time    = $datetime->format('h:i A');
			$playdate->public    = 	1; # all seeded playdates are public
			$playdate->additional_info    = 'from Seeder';
			$playdate->place_id      = $place['id'];
			$playdate->save();

			# attach many to many relationships
			$playdate->user()->attach($user);
			# attach all pets of a user to their playdate
			foreach($pets as $pet ){
				$playdate->pet()->attach($pet);
			}
		}

	}

}