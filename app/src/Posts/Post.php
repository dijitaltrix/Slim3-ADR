<?php namespace Posts;


class Post {
	
	protected $table = 'posts';
	protected $fillable = array(
		'title',
		'preview',
		'content',
	);
	
	# dummy data
	private $data = array(
		array(
			'id' => 101,
			'title' => 'My first post',
			'preview' => 'Just more noise in cyberspace',
			'content' => 'This is my very first post'
		),
		array(
			'id' => 123,
			'title' => 'Back once again',
			'preview' => 'Now I have a tune',
			'content' => 'Banging to the beat of a different drum'
		),
		array(
			'id' => 456,
			'title' => 'My last post',
			'preview' => 'So long farewell',
			'content' => 'And thanks for all the fish'
		)
	);
	
	
	public function index($params)
	{
		# this would be a query scope/filter via params
		return $this;

	}
	
	public function get()
	{
		# this would call execute on pdo 
		return $this->data;
	}
	
	public function find($id)
	{
		foreach ($this->data as $data) {
			if ($data['id'] == $id) {
				return $data;
			}
		}
		
		return false;
		
	}
	
	public function delete($id) 
	{
		return $this->find($id);
		
	}
	
	public function where() 
	{
		return $this;
	}
	
	public function insert() 
	{
		return true;
	}
	
	public function update() 
	{
		return true;
	}
	

}