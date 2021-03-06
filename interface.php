<?php 


 interface Logger {
 	public function execute($message);
 }

 /**
 * 
 */
 class LogToFile implements Logger
 {
 	
	public function execute($message)
	{
		var_dump('Log a message to a file ' . $message);
	}


 }


 /**
 * 
 */
 class LogToDataBase implements Logger
 {
 	
	public function execute($message)
	{
		var_dump('Log a message to a database ' . $message);
	}

 }

 /**
 * 
 */
 class UsersController
 {
 	protected $logger;

 	public function __construct(Logger $logger)
 	{
 		$this->logger = $logger;
 	}

 	public function show()
 	{
 		$user = 'John Doe';

 		$this->logger->execute($user);
 	}
 }

 $controller = new UsersController(new LogToDataBase);

 $controller->show();