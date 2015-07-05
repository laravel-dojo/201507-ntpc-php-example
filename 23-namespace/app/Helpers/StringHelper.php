<?php

namespace App\Helpers;

class StringHelper
{
	public function sanitize($string)
	{
		$result = trim($string);
		$result = strip_tags($result);

		return htmlentities($result, ENT_QUOTES, 'UTF-8');
	}
}
