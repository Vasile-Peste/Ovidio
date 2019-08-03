<?php
$comments = get_comments([
	"post_id" => get_the_ID(),
]);
?>
<hr class="flex flex--full separator">
<aside class="flex flex--full comments">
	<?php if (count($comments) > 0): foreach ($comments as $comment): ?>
	<?php $profile_photo_url = get_avatar_url($comment); ?>
    <div class="flex flex--full flex--vertical comment">
        <img src="<?php echo $profile_photo_url; ?>" alt="" class="image">
        <div class="flex flex--column container">
            <span class="meta"><?php echo $comment -> comment_author; ?> says</span>
            <p class="paragraph">
            	<?php echo $comment -> comment_content; ?>
            </p>
        </div>
    </div>
	<?php endforeach; endif; ?>
	<!--
	<?php if (comments_open() && is_admin()): endif; ?>
	<form action="<?php echo home_url(); ?>/wp-comments-post.php" method="post" class="flex flex--full comment-form">
		<?php if (!is_user_logged_in()): ?>
		<div class="flex flex--full">
			<input type="text" name="author" placeholder="<?php _e("Name"); ?>">
		</div>
		<div class="flex flex--full">
			<input type="text" name="email" placeholder="<?php _e("Email"); ?>">
		</div>
		<?php endif; ?>
		
		<div class="flex flex--full">
			<textarea name="comment" placeholder="<?php _e("Your thoughts"); ?>"></textarea>
		</div>
		<div class="flex flex--full">
			<button type="submit" class="button button--rounded"><?php _e("Post Comment"); ?></button>
		</div>
		
		<input type="hidden" name="comment_post_ID" value="<?php echo get_the_ID(); ?>" id="comment_post_ID">
		<input type="hidden" name="comment_parent" id="comment_parent" value="0">
	</form>
	-->
	<!--
		<div class="flex flex--full flex--center flex--vertical pagination">
			<a href="" class="link">1</a>
			<a href="" class="link">2</a>
			<a href="" class="link link--active">3</a>
			<a href="" class="link">4</a>
			<a href="" class="link">5</a>
			<span class="ellipsis">…</span>
			<a href="" class="link">11</a>
		</div>
	-->
</aside>