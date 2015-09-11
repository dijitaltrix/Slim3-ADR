<?php namespace Posts\Actions;

# add any middleware, eg: authentication
# $app->add(new Middleware\AdminAuthenticator());

$app->group('/posts', function() use ($container) {
	
	
	$this->get('', IndexAction::class);
	# $this->post('', new Update);

	$this->get('/{id:[0-9]+}', ViewAction::class);

	$this->get('/create', CreateAction::class);
	$this->post('/create', UpdateAction::class);

	$this->get('/edit/{id:[0-9]+}', EditAction::class);
	$this->post('/edit/{id:[0-9]+}', UpdateAction::class);
	
	$this->get('/delete/{id:[0-9]+}', DeleteAction::class);
	
});