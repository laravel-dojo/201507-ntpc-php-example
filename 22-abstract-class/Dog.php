<?php

class Dog extends Animal implements Swimmable
{
	public function move($x, $y)
	{
		$x = $x + 20;
		$y = $y + 20;

		$this->axis['x'] += $x;
		$this->axis['y'] += $y;
		
		echo $this->name.' is now at ('.$this->axis['x'].', '.$this->axis['y'].')'."\n";

		return $this;
	}

	public function bark()
	{
		echo 'wang wang'."\n";

		return $this;
	}

	public function swim()
	{
		echo 'swimming...'."\n";

		return $this;
	}
}