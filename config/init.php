<?php
require_once 'config.php';									

//function autoload
spl_autoload_register(function ($class){					
	$class  = explode('\\', $class);
	$class 	= end($class); 
	require_once ROOT . DS . 'system' . DS . 'libraries' . DS . $class . '.php';
});

