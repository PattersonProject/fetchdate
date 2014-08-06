<?php
 
class UserTableSeeder extends Seeder {
 
  public function run()
  {
  	
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

  	
  
  }
 
}