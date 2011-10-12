<?php

static class Configure {

	private static $_configValues;
	
	public static function Initialize() {
		
		set_exception_handler(array('ErrorHandler', 'ExceptionHandled'));
	
		Configure::Set('Database', array(
			'Host' => 'localhost', 
			'Username' => 'root', 
			'Password' => 'root', 
			'Type' => 'mysql', 
			'Database' => 'testdb')
		);
	}
	
	public static function Set($key, $value) {
		self::$_configValues[$key] = $value;
	}
	
	public static function Get($key) {
		return isset(self::$_configValues[$key]) ? self::$_configValues[$key] : null;
	}

}