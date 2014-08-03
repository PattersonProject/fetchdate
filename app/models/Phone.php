<?php

//  app/models/Phone.php

class Phone extends Eloquent
{

public function user() {

	# Phone belongs to User
	return $this->belongsTo('User');
}
	
}