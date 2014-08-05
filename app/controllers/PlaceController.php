<?php

class PlaceController extends BaseController {

	public function __construct() {
		$this->beforeFilter('auth');
	}

	public function getAdd(){
		$this->beforeFilter('auth');
		
		$data['user'] = Auth::user();
		$data['include'] = 'add_place';
		return View::make('add_place', $data);
	
	}

	public function postAdd(){


		$place= new Place;
		$place->address  = Input::get('address');
		$place->city   = Input::get('city');
		$place->state    = Input::get('state');
		$place->zip    = Input::get('zip');

			$addressStr = $place['address']." ".$place['city'].", ".$place['state'];
			$Geocoder = new GoogleMapsGeocoder($addressStr);
			$result = $Geocoder->geocode();
		$place->lat = $result['results']['0']['geometry']['location']['lat'];
		$place->lng = $result['results']['0']['geometry']['location']['lng'];

		$place->type       = Input::get('type');
		$place->user_id    = Input::get('user_id');
		$place->save();

		$user = User::with('place','pet')
		->where('id', '=', Input::get('user_id'))
		->first();

		$data['user']=$user;

		return View::make('user_home', $data)
			->with('flash_message', "Place Succesfully added");
	}
	


	
}