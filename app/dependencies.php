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

# it would also be great to trap the $app->responder call and load the 
# necessary responder then
/*
$container['responder'] = function($c) {
	# is it possible to get method call?
	# then call \Responders\{method}Responder 
	# or check responder{:method[a-z]+} ?
	#
};
*/

$container['indexAction'] = function($c, $args) {
	echo '<pre>';
	print_r($args);
	print_r($c);
	die();
	// $class = new $className();
	
};