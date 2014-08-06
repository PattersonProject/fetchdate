<?php
 
class UserTableSeeder extends Seeder {
 
  public function run()
  {
  	DB::statement('SET FOREIGN_KEY_CHECKS=0');
    DB::statement('TRUNCATE users');
    DB::statement('TRUNCATE places');
    DB::statement('TRUNCATE phones');

    // My user
    $user = User::create(array(
  		'first_name' => 'Michael',
  		'last_name' => 'Patterson',
  		'username' => 'mpatterson',
  		'email' => 'michael@patterson.com',
  		'password' => Hash::make('1234aoeu')
  		));

  	
    // Create fake users
    $faker = Faker\Factory::create();

  	for($i= 0; $i < 5; $i++)
  	{
  		$user = User::create(array(
  			'username' => $faker->username,
  			'first_name' => $faker->firstName,
  			'last_name' => $faker->lastname,
  			'email' => $faker->email,
  			'password' => Hash::make('snth0987')
  			));
  		
  	}

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

$place= new Place;
    $place->address  = 'Breakheart Reservation Upper Parking Lot';
    $place->city   = 'Saugus';
    $place->state    = 'MA';
    $place->zip    = '01906';

      $addressStr = $place['address']." ".$place['city'].", ".$place['state'];
      $Geocoder = new GoogleMapsGeocoder($addressStr);
      $result = $Geocoder->geocode();
    $place->lat = $result['results']['0']['geometry']['location']['lat'];
    $place->lng = $result['results']['0']['geometry']['location']['lng'];

    $place->type       = 'Dog Park';
    $place->user_id    = 6;
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

  
  }
 
}