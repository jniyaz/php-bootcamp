<?php

// interface approaches via Jaffrey... Intresting..

// ex 1

interface CastsToJson {
	public function toJson();
}

class User implements CastsToJson {}

class Collection implements CastsToJson {}

// ****************************************************

// ex 2 

interface Repository {
	public function save($data);
}

class MangoRepository implements Repository {
	public function save($data)
	{
		# code...
	}
}

class FileRepository implements Repository {
	public function save($data)
	{
		# code...
	}
}

// ******************************************************
// ex 3

interface CanBeFiltered {
	public function filter();
}

class Favorited implements CanBeFiltered {
	public function filter() {}
}

class Unwatched implements CanBeFiltered {
	public function filter() {}
}

class Difficulty implements CanBeFiltered {
	public function filter() {}
}


