<?php

class LogToDatabase {
    public function execute($msg)
    {
        var_dump('log the message to a database : '.$msg);
    }
}

class LogToFile {
    public function execute($msg)
    {
        var_dump('log the message to a file : '.$msg);
    }
}

class UsersController {
    protected $logger;

    // need to change manually like below, here interface plays main role

    // public function __construct(LogToFile $logger)
    public function __construct(LogToDatabase $logger)
    {
        $this->logger = $logger;
    }

    public function show()
    {
        $user = "Niyaz";
        $this->logger->execute($user);
    }

}

// Interface play main role here
// $controller = new UsersController(new LogToFile);

$controller = new UsersController(new LogToDatabase);
$controller->show();
