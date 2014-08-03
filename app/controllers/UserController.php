<?php

class UserController extends BaseController {

	public function __construct() {

	}

	public function getSeed(){

		# artisan db:seed must be run first

		# Seed places
	$place= new Place;
	$place->address  = '74 Oxford st.';
	$place->city   = 'Cambridge';
	$place->state    = 'MA';
	$place->zip    = '02138';

		$addressStr = $place['address']." ".$place['city'].", ".$place['state'];
		$Geocoder = new GoogleMapsGeocoder($addressStr);
		$result = $Geocoder->geocode();
	$place->lat = $result['results']['0']['geometry']['location']['lat'];
	$place->lng = $result['results']['0']['geometry']['location']['lng'];

	$place->type       = 'Residence';
	$place->user_id    = 1;
	$place->save();

	$place= new Place;
	$place->address  = '31 Sacramento St.';
	$place->city   = 'Cambridge';
	$place->state    = 'MA';
	$place->zip    = '02138';

		$addressStr = $place['address']." ".$place['city'].", ".$place['state'];
		$Geocoder = new GoogleMapsGeocoder($addressStr);
		$result = $Geocoder->geocode();
	$place->lat = $result['results']['0']['geometry']['location']['lat'];
	$place->lng = $result['results']['0']['geometry']['location']['lng'];

	$place->type       = 'Dog Park';
	$place->user_id    = 1;
	$place->save();

	$place= new Place;
	$place->address  = '114 Tremont St.';
	$place->city   = 'Cambridge';
	$place->state    = 'MA';
	$place->zip    = '02139';

		$addressStr = $place['address']." ".$place['city'].", ".$place['state'];
		$Geocoder = new GoogleMapsGeocoder($addressStr);
		$result = $Geocoder->geocode();
	$place->lat = $result['results']['0']['geometry']['location']['lat'];
	$place->lng = $result['results']['0']['geometry']['location']['lng'];

	$place->type       = 'Residence';
	$place->user_id    = 2;
	$place->save();

	$place= new Place;
	$place->address  = '23 Perry St.';
	$place->city   = 'Somerville';
	$place->state    = 'MA';
	$place->zip    = '02143';

		$addressStr = $place['address']." ".$place['city'].", ".$place['state'];
		$Geocoder = new GoogleMapsGeocoder($addressStr);
		$result = $Geocoder->geocode();
	$place->lat = $result['results']['0']['geometry']['location']['lat'];
	$place->lng = $result['results']['0']['geometry']['location']['lng'];

	$place->type       = 'Dog Park';
	$place->user_id    = 2;
	$place->save();

	$place= new Place;
	$place->address  = '50 Hall Ave';
	$place->city   = 'Watertown';
	$place->state    = 'MA';
	$place->zip    = '02472';

		$addressStr = $place['address']." ".$place['city'].", ".$place['state'];
		$Geocoder = new GoogleMapsGeocoder($addressStr);
		$result = $Geocoder->geocode();
	$place->lat = $result['results']['0']['geometry']['location']['lat'];
	$place->lng = $result['results']['0']['geometry']['location']['lng'];

	$place->type       = 'Residence';
	$place->user_id    = 3;
	$place->save();

	$place= new Place;
	$place->address  = '47 Fairmount Ave.';
	$place->city   = 'Someville';
	$place->state    = 'MA';
	$place->zip    = '02144';

		$addressStr = $place['address']." ".$place['city'].", ".$place['state'];
		$Geocoder = new GoogleMapsGeocoder($addressStr);
		$result = $Geocoder->geocode();
	$place->lat = $result['results']['0']['geometry']['location']['lat'];
	$place->lng = $result['results']['0']['geometry']['location']['lng'];

	$place->type       = 'Residence';
	$place->user_id    = 4;
	$place->save();

	$place= new Place;
	$place->address  = '38 Raymond Ave.';
	$place->city   = 'Someville';
	$place->state    = 'MA';
	$place->zip    = '02134';

		$addressStr = $place['address']." ".$place['city'].", ".$place['state'];
		$Geocoder = new GoogleMapsGeocoder($addressStr);
		$result = $Geocoder->geocode();
	$place->lat = $result['results']['0']['geometry']['location']['lat'];
	$place->lng = $result['results']['0']['geometry']['location']['lng'];

	$place->type       = 'Dog Park';
	$place->user_id    = 4;
	$place->save();

	$place= new Place;
	$place->address  = '10 Buckman St.';
	$place->city   = 'Woburn';
	$place->state    = 'MA';
	$place->zip    = '01801';

		$addressStr = $place['address']." ".$place['city'].", ".$place['state'];
		$Geocoder = new GoogleMapsGeocoder($addressStr);
		$result = $Geocoder->geocode();
	$place->lat = $result['results']['0']['geometry']['location']['lat'];
	$place->lng = $result['results']['0']['geometry']['location']['lng'];

	$place->type       = 'Residence';
	$place->user_id    = 5;
	$place->save();

	$place= new Place;
	$place->address  = 'Horn Pond Arlington Rd';
	$place->city   = 'Woburn';
	$place->state    = 'MA';
	$place->zip    = '01807';

		$addressStr = $place['address']." ".$place['city'].", ".$place['state'];
		$Geocoder = new GoogleMapsGeocoder($addressStr);
		$result = $Geocoder->geocode();
	$place->lat = $result['results']['0']['geometry']['location']['lat'];
	$place->lng = $result['results']['0']['geometry']['location']['lng'];

	$place->type       = 'Dog Park';
	$place->user_id    = 5;
	$place->save();

	# Seed Phone numbers

	$faker = Faker\Factory::create();
 
	for ($i=0; $i < 4; $i++) 
	{
		$phone= new Phone;
		$phone->type = 'mobile';
		$phone->phone = $faker->phoneNumber;
		$phone->user_id = $i+1;
		$phone->save();
	}

	return Response::make('Places and phones added');

}

} 