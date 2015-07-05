<?php

class Animal
{
	public $name;
	protected $axis;

	public function __construct($name)
	{
		$this->name = $name;
		$this->axis = ['x' => 0, 'y' => 0];
	}

	public function move($x, $y)
	{
		$this->axis['x'] += $x;
		$this->axis['y'] += $y;
		
		return $this->axis;
	}
}