<?php

interface Animal {
	
	public function communicate();

}

class Dog implements Animal
{
	public function communicate()
	{
		return 'barks';
	}
}

class Cat implements Animal
{
	public function communicate()
	{
		return 'meow';
	}
}

class Lion implements Animal
{
	public function communicate()
	{
		return 'roars';
	}
}