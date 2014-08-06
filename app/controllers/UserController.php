<?php

class UserController extends BaseController {

	public function __construct() {
		$this->beforeFilter('auth', array(
			'except' => array('getAdd', 'postAdd')));

	}

	public function getAdd() {
		return View::make('add_user');
	}

	public function postAdd() {

	$rules=array(
		'email' => 'email|unique:users,email',
		'password' => 'min:6'
	)	;

	// Save new User
	$user= new User;
	$user->first_name  = Input::get('firstName');
	$user->last_name   = Input::get('lastName');
	$user->username    = Input::get('username');
	$user->password    = Hash::make(Input::get('password'));
	$user->email       = Input::get('email');
	$user->about_me    = Input::get('aboutMe');
	$user->save();

	$credentials = Input::only('username', 'password');
	
	if (Auth::attempt($credentials)) {
		return Redirect::to('user/dashboard');
	}else{
		echo "Error with user_home";
		return Redirect::to('user/add')
			->with('flash_message', 'Log in failed;  please check your username and password and try again.');
	}

	
	}

	public function getDashboard(){
		$user = Auth::user();
		$data['user'] = User::with('place','pet','playdate')
			->where('id', '=', $user['id'])
			->first();
		
		$date['include'] = 'user_playdates';
		// echo Paste\Pre::r($user);
		return View::make('user_home',$data);
	}

	public function getLogout() {

		# Log out
		Auth::logout();

		# Send them to the homepage
		return Redirect::to('/');

	}

} 