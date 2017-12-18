<?php

class Person
{
	private $name;
	private $age;
	
	public function __construct($name)
	{
		$this->name = $name;
	}

	public function getAge() 
	{
		return $this->age * 365;
	}

	public function setAge($age)
	{
		if($age < 18) {
			throw new Exeception("Person is not old enough");
		}
		$this->age = $age;
	}

}

$person = new Person('John Doe');

$person->setAge(25);

// directly manipulate the property value
// $person->age = 3; // here wo go for encapsulation to sort it out, set the property value private or protected.

var_dump($person->getAge());