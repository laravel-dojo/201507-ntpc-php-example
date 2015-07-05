<?php

abstract class Animal
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

	abstract public function move($x, $y);
}