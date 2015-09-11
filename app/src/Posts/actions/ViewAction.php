<?php namespace Posts\Actions;

use Posts\Post;

class ViewAction extends \Actions\ViewAction {
	
	
	public function __construct()
	{
		$this->name = 'post';
		$this->view = __DIR__.'/../views/view.php';
		$this->model = new Post();
	}
	
}