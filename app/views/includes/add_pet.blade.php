<form action={{ url('add_pet') }} method="post">
	Hello <?php  echo ($first_name) ?>  - let's add a pet
	<input type="hidden" name="user_id" value="<?php echo ($id) ?>" >

	<p><label for="pet_name">Pet Name: </label></p>
	<p><input type="text" name="pet_name" placeholder="Pet Name" /></p>
	<p><label for="breed">Breed: </label></p>
	<p><input type="text" name="breed" placeholder="Breed" /></p>
	<p><label for="weight">Weight: </label></p>
	<p><input type="text" name="weight" placeholder="Weight" /></p>
	<p><label for="age">Age: </label></p>
	<p><input type="text" name="age" placeholder="Age" /></p>

	
	<p><input type="submit" value+"Submit!" /> </p>