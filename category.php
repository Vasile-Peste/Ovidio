<?php get_header(); ?>
<div class="main">
	<h1 class="title"><?php _e("Posts in the");?> <?php single_cat_title(); ?> <?php _e("category"); ?></h1>
	<hr class="flex flex--full separator">
    <?php render("posts"); ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>