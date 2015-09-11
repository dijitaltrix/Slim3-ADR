<div class="post" data_id="<?php echo $post['id'] ?>">
	<h1><?php echo $post['title'] ?></h1>
	<p><strong><?php echo $post['preview'] ?></strong></p>
	<p><?php echo $post['title'] ?></p>
	<a href="/posts/edit/<?php echo $post['id'] ?>">Edit me</a>
	| <a href="/posts/delete/<?php echo $post['id'] ?>">Delete me</a>
</div>
