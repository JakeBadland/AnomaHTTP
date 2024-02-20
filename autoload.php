<?php

spl_autoload_register(function ($class){

	$prefix = 'application' . DS;

	if (strpos($class, 'Controller') !== false){
		$prefix .= 'controllers' . DS;
	}

	if (strpos($class, 'Model') !== false){
		$prefix .= 'models' . DS;
	}

	$fileName = FCPATH . $prefix . $class . '.php';

	if (is_file($fileName)){
		require_once ($fileName);
	} else {
		throw new \Exception("Unable to find file {$fileName} in Autoloader.");
	}



});
