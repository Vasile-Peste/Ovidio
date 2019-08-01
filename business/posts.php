<?php if (have_posts()): while (have_posts()): the_post(); ?>
<!-- Post Preview -->
<div class="flex flex--full preview">
    <h2 class="title title--no-separator"><?php the_title(); ?></h2>
    <?php require "post-meta.php"; ?>
    <?php $preview = WordPressUtilities::get_post_first_paragraph(); ?>
    <?php if ($preview): ?>
    <p class="paragraph">
        <?php echo $preview; ?>
    </p>
    <?php endif; ?>
    <div class="flex flex--full flex--center">
        <a href="<?php the_permalink(); ?>" class="button button--rounded"><?php _e("Read post"); ?> →</a>
    </div>
</div>
<!-- / Post Preview -->
<hr class="flex flex--full separator">
<?php endwhile; require "pagination.php"; else: ?>
<p class="paragraph">
	<?php _e("No posts found"); ?>.
</p>
<?php endif; ?>