<?php namespace Posts\Actions;

use Posts\Post;

class IndexAction extends \Actions\IndexAction {
	
	
	public function __construct()
	{
		$this->name = 'posts';
		$this->view = __DIR__.'/../views/index.php';
		$this->domain = new Post();
		
	}
	
}