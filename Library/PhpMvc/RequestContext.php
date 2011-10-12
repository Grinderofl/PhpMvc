<?php

/**
 * Encapsulates information about an HTTP request that matches a defined route.
 **/
class RequestContext {
	
	/**
	 * Gets information about the HTTP request.
	 *
	 * @var HttpContext object
	 **/
	public $HttpContext;
	
	/**
	 * Gets information about the requested route.
	 *
	 * @var RouteData object
	 **/
	public $RouteData;
	
	/*
	 * Initializes a new instance of the RequestContext class.
	 *
	 * @param $httpContext HttpContextBase An object that contains information about the HTTP request.
	 * @param $routeData RouteData An object that contains information about the route that matched the current request.
	 **/
	public function __construct($httpContext = null, $routeData = null) {
		if($httpContext == null)
			$this->HttpContext = new HttpContext();
		else
			$this->HttpContext = $httpContext;
			
		if($routeData == null)
			$this->RouteData = new RouteData();
		else
			$this->RouteData = $routeData;
	}
	
	
		
}