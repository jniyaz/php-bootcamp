<?php
class Task
{
	public $title;
	public $description;
	public $completed = false;

	function __construct($title, $description)
	{
		$this->title = $title;
		$this->description = $description;
	}

	public function complete()
	{
		$this->completed = true;
	}
}

$task = new Task('Learn OOP', 'The teacher blah blah........');
var_dump($task->title); 
var_dump($task->description); 
$task->complete();
var_dump($task->completed);