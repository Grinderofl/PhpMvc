<?php

class ControllerFactory {
	
	public function CreateController($routeData) {
	
		$requestContext = new RequestContext(new HttpContext(), new RouteData($routeData));
		
		return new $controllerName($requestContext);
	}
	
}