<?php get_header(); ?>
<div class="main">
	<h1 class="title"><?php _e("Search results for"); ?> «<?php echo get_search_query(); ?>»</h1>
	<hr class="flex flex--full separator">
    <?php require "business/posts.php"; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>