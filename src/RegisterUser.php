<?php 

namespace Acme;
/**
* 
*/
class RegisterUser
{
	
	public function execute($data, $listener)
	{
		var_dump('Registering the user');

		$listener->userRegisteredSuccessfully();
		//$listener->userRegisteredFailed();
	}
}