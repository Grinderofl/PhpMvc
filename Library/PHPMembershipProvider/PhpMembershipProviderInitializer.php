<?php

class PhpMembershipProviderInitializer {

	public static function Initialize() {
		spl_autoload_register(array(self, 'LoadClass'));
	}
	
	public static function LoadClass($className) {
		if(file_exists($className . '.php'))
			include($className . '.php');
		elseif(file_exists('Abstract/{$className}.php')
			include('Abstract/{$className}.php');
	}

}