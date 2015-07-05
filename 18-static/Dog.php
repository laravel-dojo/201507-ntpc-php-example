<?php

class Dog extends Animal
{
	public function move($x, $y)
	{
		$x = $x + 20;
		$y = $y + 20;

		$this->axis['x'] += $x;
		$this->axis['y'] += $y;
		
		return $this->axis;
	}

	public static function bark()
	{
		echo 'wang wang'."\n";
	}
}