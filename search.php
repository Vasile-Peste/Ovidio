<?php get_header(); ?>
<?php $search_query = get_search_query(); ?>
<div class="main">
	<h1 class="title"><?php _e("Search results for"); ?> «<?php echo $search_query; ?>»</h1>
	<hr class="flex flex--full separator">
    <?php render("posts"); ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>