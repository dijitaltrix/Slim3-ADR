<h1>Edit post</h1>
<form action="/posts/edit/<?php echo $post['id'] ?>" method="post">
	<label>Title</label>
	<input type="text" name="title" value="<?php echo $post['title'] ?>">
	<br>
	<label>Preview</label>
	<input type="text" name="preview" value="<?php echo $post['preview'] ?>">
	<br>
	<label>Content</label>
	<textarea name="content" rows="9"><?php echo $post['content'] ?></textarea>
	<br>
	<button type="submit" name="button" value="create">Save changes</button>
	
</form>