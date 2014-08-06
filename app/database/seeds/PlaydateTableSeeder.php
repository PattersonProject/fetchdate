<?php

class PlaydateTableSeeder extends Seeder {

	public function run(){

		DB::statement('TRUNCATE playdates');

		$faker = Faker\factory::create();
	

		for ($i=0; $i < 15; $i++){

			$user = User::whereId(rand(1, 5))
				->first();
			$pets = Pet::where('user_id', '=', $user['id'])
				->get();
			$place = Place::where('user_id', '=', $user['id'])
				->take(1)
				->first();

		
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
