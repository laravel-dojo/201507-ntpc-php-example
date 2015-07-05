<?php

class Cat extends Animal
{
	public function move($x, $y)
	{
		$x = $x - 10;
		$y = $y - 10;

		$this->axis['x'] += $x;
		$this->axis['y'] += $y;
		
		return $this->axis;
	}
}