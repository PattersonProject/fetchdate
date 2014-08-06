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

	return View::make('landing');
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
	return Redirect::to('login')
		->with('flash_message', 'Log in failed;  please check your username and password and try again.');

});

Route::controller('pet', 'PetController');

Route::controller('user', 'UserController');

Route::controller('place', 'PlaceController');

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
