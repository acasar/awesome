<?php
namespace BlazOrazem\Awesome;

class Awesome {

	public static function printAwesomeness()
	{
		echo 'Awesome dude!';
	}

	public static function debug($var)
	{
		print("<pre>" . print_r($var, true) . "</pre>");
	}

	public static function diebug($var)
	{
		exit(self::debug($var));
	}

}