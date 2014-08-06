<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		#Create users table
		Schema::create('users', function($table) {

			# PK AI
			$table->increments('id');

			#created at, updated on columns, remember token
			$table->timestamps();
			$table->rememberToken();

			#general data
			$table->string('first_name', 30);
			$table->string('last_name', 40);
			$table->string('username', 20);
			$table->string('password', 60);
			$table->string('email', 45);
			$table->longText('about_me');

			
			#no foreign keys

		});

		#Create pets table
		Schema::create('pets', function($table) {
			# PK AI
			$table->increments('id');

			#created at, updated on columns
			$table->timestamps();

			#data
			$table->string('pet_name', 30);
			$table->string('breed', 45);
			$table->integer('weight');
			$table->integer('birthdate');
			$table->longText('about_me');
			$table->integer('user_id')->unsigned(); #user FK

			#define foreign keys
			$table->foreign('user_id')->references('id')->on('users');
		});

		#Create places table
		Schema::create('places', function($table) {
			# PK AI
			$table->increments('id');

			#created at, updated on columns
			$table->timestamps();


			#general data
			$table->string('name', 45);
			$table->string('type', 45);
			$table->string('address', 60);
			$table->string('city', 25);
			$table->string('state', 2);
			$table->string('zip', 10);
			$table->double('lat');
			$table->double('lng');
			$table->integer('user_id')->unsigned(); #user FK
			
			#define foreign keys
			$table->foreign('user_id')->references('id')->on('users');
		});

		#create phones table
		Schema::create('phones', function($table){
			# PK AI
			$table->increments('id');

			#created at, updated on columns
			$table->timestamps();

			#general data
			$table->string('type',20);
			$table->string('phone', 20);
			$table->integer('user_id')->unsigned(); #user FK

			#define foreign keys
			$table->foreign('user_id')->references('id')->on('users');


		});

		#Create playdates table
		Schema::create('playdates', function($table){
			# PK AI
			$table->increments('id');

			#created at, updated on columns
			$table->timestamps();

			#general data
			$table->date('date');
			$table->time('start_time');
			$table->time('end_time');
			$table->boolean('public');
			$table->longText('additional_info');
			$table->integer('place_id')->unsigned();

			#define foreign keys
			$table->foreign('place_id')->references('id')->on('places');

		});

		#Create playdate_user pivot table
		Schema::create('playdate_user', function($table){
			# No PK AI needed

			#general data
			$table->integer('playdate_id')->unsigned();
			$table->integer('user_id')->unsigned();

			#define foreign keys
			$table->foreign('playdate_id')->references('id')->on('playdates');
			$table->foreign('user_id')->references('id')->on('users');


		});

		#Create playdate_pet pivot table
		Schema::create('pet_playdate', function($table){
			# No PK AI needed

			#general data
			$table->integer('playdate_id')->unsigned();
			$table->integer('pet_id')->unsigned();

			#define foreign keys
			$table->foreign('playdate_id')->references('id')->on('playdates');
			$table->foreign('pet_id')->references('id')->on('pets');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pet_playdate');

		Schema::drop('playdate_user');


		Schema::drop('playdates');


		Schema::drop('phones');

		Schema::drop('places');

		Schema::drop('pets');

		Schema::drop('users');
	}

}
