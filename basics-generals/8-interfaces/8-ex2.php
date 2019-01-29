<?php

interface Logger {
	public function execute($message);
}

class LogToFile implements Logger {
	public function execute($message)
	{
		var_dump('log the message to a file : ' . $message);
	}	
}

class LogToDatabase implements Logger {
	public function execute($message)
	{
		var_dump('log the message to a database table : ' . $message);
	}	
}

class UsersController {

	protected $logger;

	public function __construct(Logger $logger)
	{
		$this->logger = $logger;
	}

	public function show()
	{
		$user = "Niyaz Jamal";
		
		// log this information
		$this->logger->execute($user);
	}
}

// while using no need to touch the userscontroller.. very easy uderstandable code..

$filelog = new UsersController(new LogToFile);

$dblog = new UsersController(new LogToDatabase);

echo $filelog->show();
echo '<br/>';
echo $dblog->show();