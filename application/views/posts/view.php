<h2><?php echo $post['title'] ?></h2>
<img src="<?php echo site_url('/assets/images/posts/'.$post['post_image']); ?>">
<small class="post-date">Posted on: <?php echo $post['created_at']; ?></small>
<br/>
<div class="post-body">
	<?php echo $post['body']; ?>
</div>

<hr/>
<a href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>" class="btn btn-secondary pull-left">Edit</a>
<?php echo form_open('posts/delete/'.$post['id']); ?>
	<input type="submit" value="Delete" class="btn btn-danger" />
</form>
<hr/>
<h3>Comments</h3>
<?php if($comments) : ?>
	<?php foreach($comments as $comment) : ?>
		<div class="well">
			<?php echo $comment['body']; ?> by <strong><?php echo $comment['name']; ?></strong>
		</div>
	<?php endforeach; ?>
<?php else : ?>
	<p>No comments to display</p>
<?php endif; ?>
<hr/>
<h3>Add Comment</h3>
<?php echo validation_errors(); ?>
<?php echo form_open('comments/create/'.$post['id']); ?>
	<div class="form-group">
		<label>Name</label>
		<input type="text" name="name" class="form-control" />
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="text" name="email" class="form-control" />
	</div>
	<div class="form-group">
		<label>Name</label>
		<textarea name="body" class="form-control"></textarea>
	</div>
	<input type="hidden" name="slug" value="<?php echo $post['slug']; ?>" />
	<button class="btn btn-primary" type="submit">Submit</button>
</form>