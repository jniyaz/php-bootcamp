<?php

interface Logger {
    public function execute($msg);
}

class LogtoFile implements Logger {
    public function execute($msg)
    {
        var_dump("Log the message to a file : ".$msg);
    }
}

class LogtoDatabase implements Logger {
    public function execute($msg)
    {
        var_dump("Log the message to a database : ".$msg);
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
        $user = "Jamal";
        $this->logger->execute($user);
    }
}

$obj = new UsersController(new LogtoFile());
$obj->show();
