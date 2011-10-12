<?php

// Initialize Autoloader
include(AUTOLOADER);
Autoloader::Initialize();

// Initialize configuration
Configure::Initialize();

$router = new Router();
$router->Begin();