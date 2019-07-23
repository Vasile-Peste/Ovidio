<?php get_header(); ?>
<?php the_post(); ?>
<article class="main post">
    <?php dynamic_sidebar("before-post"); ?>
    <?php require "business/post-meta.php"; ?>
    <h1 class="title"><?php the_title(); ?></h1>
    <?php the_content(); ?>
    <?php dynamic_sidebar("after-post"); ?>
	<?php comments_template(); ?>
</article>
<?php get_sidebar(); ?>
<?php get_footer(); ?>