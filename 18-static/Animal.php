<?php

class Animal
{
	protected $name;
	protected $axis;

	public function __construct($name = 'Max')
	{
		$this->name = $name;
		$this->axis = ['x' => 0, 'y' => 0];
	}

	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		$this->name = $name;
		return true;
	}

	public function move($x, $y)
	{
		$this->axis['x'] += $x;
		$this->axis['y'] += $y;
		
		return $this->axis;
	}
}