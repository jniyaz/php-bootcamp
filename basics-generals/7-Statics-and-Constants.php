<?php

class Math {

	// public function add()
	// {
	// 	return array_sum(func_get_args());
	// }

	// new php version something like this

	// public function add(...$nums)
	public static function add(...$nums)
	{
		return array_sum($nums);
	}
}

//$math = new Math;
// var_dump($math->add(1,2,3));

echo Math::add(1,2,3);