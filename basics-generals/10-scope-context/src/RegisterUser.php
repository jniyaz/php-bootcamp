<?php namespace Acme;

class RegisterUser {

	public function execute(array $data, RespondsToUserRegisteration $listener) {
		
		var_dump('Registering the user.');

		// $listener->userRegisteredSuccess();

		$listener->userRegisteredFailed();

	}

} 