<?php

final class MvcRouter extends Router{
	
	public function Begin() {
	
		$url = $_GET;

		/** 
		 * pseudocode: 
		 * $url = split($_GET, '/');
		 * $controllerName = $url[0];
		 * $actionName = $url[1];
		 * $queryParams = $url[2...];
		 **/
		
		$controllerFactory = new ControllerFactory();
		$controller = $controllerFactory->CreateController($controllerName, $actionName);
		
		$controller->OnActionExecuting();
		$controller->ExecuteAction($queryParams);
		$controller->OnActionExecuted();
	}
	
	public function Routes() {
		$this->AddRoute('Default', '{controller}/{action}/{id}', array('controller' => 'Home', 'action' => 'Index'));
	}
	
}