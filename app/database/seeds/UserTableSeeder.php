<?php
 
class UserTableSeeder extends Seeder {
 
  public function run()
  {
  	$user = User::create(array(
  		'first_name' => 'Michael',
  		'last_name' => 'Patterson',
  		'username' => 'mpatterson',
  		'email' => 'michael@patterson.com',
  		'password' => Hash::make('1234aoeu')
  		));

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

  	
  	
  
  }
 
}