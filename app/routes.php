<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
use Paste\Pre;

Route::get('/', function()
{
	echo ('hello');
	return View::make('hello');
});

Route::get('/login', function() 
{
	
	return View::make('login_form');

});

Route::post('/login', function() 
{
	$credentials = Input::only('username', 'password');
	$remember = Input::has('remember');
		if (Auth::attempt($credentials, $remember)) {
			return Redirect::intended('/');
	}
	return Redirect::to('login');

});

Route::get('/add_user', function()
{
	return View::make('add_user');
});

Route::post('/add_user', function(){
	
	$user= new User;
	$user->first_name  = Input::get('firstName');
	$user->last_name   = Input::get('lastName');
	$user->username    = Input::get('username');
	$user->password    = Hash::make(Input::get('password'));
	$user->email       = Input::get('email');
	$user->about_me    = Input::get('aboutMe');
	$user->save();


	return Response::make('User Created');
});

Route::get('/add_pet', array(
	'before' => 'auth',
	function(){
		$user = Auth::user();
		return View::make('add_pet', $user);
	}
));

Route::post('/add_pet', function(){
	
	$pet= new pet;
	$pet->pet_name  = Input::get('pet_name');
	$pet->breed   = Input::get('breed');
	$pet->weight   = Input::get('weight');
	$pet->age       = Input::get('age');
	$pet->user_id   = Input::get('user_id');
	$pet->save();
	
	return Response::make('Post add_pet');
});

Route::get('/add_place', array(
	'before' => 'auth',
	function(){
		$user = Auth::user();
		return View::make('add_place', $user);
	}
));

Route::post('/add_place', function(){
	
	$place= new Place;
	$place->address  = Input::get('address');
	$place->city   = Input::get('city');
	$place->state    = Input::get('state');
	$place->zip    = Input::get('zip');

		$addressStr = $place1['address']." ".$place1['city'].", ".$place1['state'];
		$Geocoder = new GoogleMapsGeocoder($place1str);
		$result = $Geocoder->geocode();
	$place->lat = $result['results']['0']['geometry']['location']['lat'];
	$place->lng = $result['results']['0']['geometry']['location']['lng'];

	$place->type       = Input::get('type');
	$place->user_id    = Input::get('user_id');
	$place->save();


	return Response::make('Place added');
});

Route::get('/add_playdate', array(
	'before' => 'auth',
	function(){
		$user = Auth::user();
		$data['user'] = $user;
		$data['places'] = Place::where('user_id','=', $user['id'])
			->get();
		
		return View::make('add_playdate', $data);
	}
));


Route::get('/test_distance', array( 
	'before' => 'auth',
	function(){
		
		$user = Auth::user();
		$places = Place::all();
		$place1 = Place::first();
		$place1str = $place1['address']." ".$place1['city'].", ".$place1['state'];
		 echo $place1str.'<br/>';

		 $Geocoder = new GoogleMapsGeocoder($place1str);

		 $result = $Geocoder->geocode();
		 $coordA = Geotools::coordinate(array(
		 	$result['results']['0']['geometry']['location']['lat'],
		 	$result['results']['0']['geometry']['location']['lng']));
		 
		 foreach ($places as $place){
			$place2str = $place['address']." ".$place['city'].", ".$place['state'];
			$geocoder2 = new GoogleMapsGeocoder($place2str);
			$result2 = $geocoder2->geocode();
			$coordB = Geotools::coordinate(array(
			 	$result2['results']['0']['geometry']['location']['lat'],
			 	$result2['results']['0']['geometry']['location']['lng']));
		 
		 	$distance = Geotools::distance()->setFrom($coordA)->setTo($coordB);
		 	$miles = sprintf ($distance->in('mi')->flat());
			echo ("The distance between ".$place1str." and ".$place2str." is ".$miles);
		 }

		// echo Pre::r($place);	
	}
));


Route::post('/add_playdate', function(){
	
	$place = Place::where('address', '=', Input::get('place'))
		->first();
	$user = User::where('id', '=' , Input::get('user_id'))
		->first();
	echo ($place['id'].' '.$place['address']);
	

	$playdate= new Playdate;
	$playdate->date  = Input::get('date');
	$playdate->start_time   = Input::get('start_time');
	$playdate->end_time    = Input::get('end_time');
	$playdate->public    = (Input::get('public') ? true: false);
	$playdate->additional_info    = Input::get('additional_info');
	$playdate->places_id      = $place['id'];
	$playdate->save();

	# attach many to many relationships
	$playdate->user()->attach($user);


	return Response::make('Place added');
});



 /**********Admin and testing Routes *********/

Route::controller('pet', 'PetController');

Route::controller('user', 'UserController');

Route::controller('playdate', 'PlaydateController');

/**********Debuging routes *******************/

Route::get('mysql-test', function() {

	#Show all databases
	$results = DB::select('SHOW DATABASES;');

	echo Pre::r($results);
});

Route::get('/get-environment', function(){

	echo "Environment: ".App::environment();
});

Route::get('/debug', function() {


    echo '<pre>';

    echo '<h1>environment.php</h1>';
    $path   = base_path().'/environment.php';

    try {
        $contents = 'Contents: '.File::getRequire($path);
        $exists = 'Yes';
    }
    catch (Exception $e) {
        $exists = 'No. Defaulting to `production`';
        $contents = '';
    }

    echo "Checking for: ".$path.'<br>';
    echo 'Exists: '.$exists.'<br>';
    echo $contents;
    echo '<br>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(Config::get('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    print_r(Config::get('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    } 
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});
