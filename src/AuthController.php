<?php 

namespace Acme;
/**
* 
*/
class AuthController implements RespondsToUserRegistration
{
	protected $registration;
	
	public function __construct(RegisterUser $registration)
	{
		$this->registration = $registration;
	}

	public function register()
	{
		$this->registration->execute([],$this);
	}

	public function userRegisteredSuccessfully(){

		var_dump('User Created Successfully');
	}

	public function userRegisteredFailed(){

		var_dump('User not created');
	}
}