<?php

class Post {

	static $data;

	public static function _set($data)
	{
		self::$data = $data;
	}

	public static function get($i)
	{
		return self::$data[$i];
	}
	
}