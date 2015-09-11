<?php

$container = new \Slim\Container;

# override the foundHandler to inject the app into Actions
# if ClassName ends with Action then call 
#	new AppRequestResponse
# else call the standard
# 	new RequestResponse

# see docs here
# http://www.slimframework.com/docs/objects/router.html#route-strategies

/*

Not a good idea to inject app, or Pimple, just the required
dependencies of that particular action.

$container['foundHandler'] = function($c) {
	
	# TODO create an AppRequestResponse class 
	# to implement the Slim\Interfaces\InvocationStrategyInterface
	if (substr($callable, -6) == 'Action') {
		# inject App as well
		return new Slim\Handlers\Strategies\AppRequestResponse();
	} else {
		return new Slim\Handlers\Strategies\RequestResponse();
	}
	
};
*/

# apparently a Factory class is the way to go.. 
# seems a bit 'Controller'ish to me
$container['indexAction'] = function($c, $args) {
	echo '<pre>';
	print_r($args);
	print_r($c);
	die();
	// $class = new $className();
	
};