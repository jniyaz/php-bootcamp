<?php namespace Acme;

class AuthController implements RespondsToUserRegisteration {

	// constructor level method injection

	protected $registration;

	public function __construct(RegisterUser $registration)
	{
		$this->registration = $registration;
	}

	// method injection

	public function register() {

		$this->registration->execute([], $this);

	}

	public function userRegisteredSuccess()
	{
		var_dump('user creation successfull.. redirect..');
	}

	public function userRegisteredFailed()
	{
		var_dump('user creation failed.. redirect back..');
	}

}