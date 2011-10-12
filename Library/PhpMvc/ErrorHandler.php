<?php

class ErrorHandler {
	
	public function ExceptionHandled($exception) {
		$traceline = "#%s %s(%s): %s(%s";
		$msg = "Fatal Error: Uncaught exception '%s' with message '%s' in %s:%s\nStack trace:\n%s\n thrown in %s on line %s";
		
		$trace = $exception->getTrace();
		foreach($trace as $key => $stackPoint) {
			$trace[$key]['args'] = array_map('gettype', $trace[$key]['args']);
		}
		
		$result = array();
		foreach($trace as $key => $stackPoint) {
			$result[] = sprintf(
				$traceline,
				$key,
				$stackPoint['file'],
				$stackPoint['line'],
				$stackPoint['function'],
				implode(', ', $stackPoint['args'])
			);
		}
		
		$result[] = '#' . ++$key . ' {main}';
		
		$msg = sprintf(
			$msg,
			get_class($exception),
			$exception->getMessage(),
			$exception->getFile(),
			$exception->getLine(),
			implode("\n", $result),
			$exception->getFile(),
			$exception->getLine()
		);
		
		print_r($result);
	}
	
}