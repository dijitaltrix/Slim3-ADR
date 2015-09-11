<h1>Posts</h1>
<hr>
<div class="posts">
	<?php foreach ($posts as $post): ?>
	<div class="post" data_id="<?php echo $post['id'] ?>">
		<h3><?php echo $post['title'] ?></h3>
		<p><strong><?php echo $post['preview'] ?></strong></p>
		<p><?php echo $post['title'] ?></p>
		<a href="/posts/<?php echo $post['id'] ?>">Read more</a>
	</div>
	<hr>
	<?php endforeach; ?>
</div>
