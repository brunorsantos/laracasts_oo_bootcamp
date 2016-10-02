<?php 

interface Provider{

	public function getAuthorizationUrl();

}

/**
* 
*/
class AbstractProvider
{
	
	protected function related()
	{
		// implementacao de codigo em comum entre todos os providers
		// tambem poderia ser feito via dependency injection.

	}
}

/**
* 
*/
class FacebookProvider extends AbstractProvider implements Provider
{
	protected function getAuthorizationUrl()
	{
		return ''
		// implementacao especifca do metodo que a classe deve ter
		// exigida em contrato
		// Na interface ela deve ser publica.
	}
}

class TwitterProvider extends AbstractProvider implements Provider
{
	protected function getAuthorizationUrl()
	{
		return ''
		// implementacao especifca do metodo que a classe deve ter
		// exigida em contrato
		// Na interface ela deve ser publica.
	}
}