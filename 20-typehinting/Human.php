<?php

class Human
{
	protected $name;
	protected $words;

	public function __construct($name = 'Somebody', array $words = ['Hi'])
	{
		$this->name = $name;
		$this->words = $words;
	}

	public function greeting(array $words = null)
	{
		$speaks = ($words)? $words : $this->words;

		$index = rand(0, count($speaks) - 1);
		$sentence = $this->name.' say '.$speaks[$index].' to you!';

		return $sentence;
	}

	public function swimWith(Animal $animal)
	{
		$sentence = $this->name.' is swimming with '.$animal->getName();

		return $sentence;
	}
}