<?php

class Autoloader {
	private static $_sources = array(
		'Models/',
		'Views/',
		'Controllers/',
		'Config/',
		'Library/'
	);
	
	public static function Initialize() {
		spl_autoload_register(array(self, 'load'));
	}
	
	private static function load($className) {
		foreach(self::$_sources as $path) {
			$directories = self::diretoryToArray("./", true);
			foreach($directories as $directory) {
				if(file_exists($path.'/'.$directory.'/'.$className.'.php')) {
					set_include_path($path.'/'.$directory);
					spl_autoload($className);
				}
			}
		}
		
		throw new FileNotFoundException();
	}
}