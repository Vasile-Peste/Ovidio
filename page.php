<?php get_header(); ?>
<?php the_post(); ?>
<div class="main post">
    <h1 class="title"><?php the_title(); ?></h1>
    <?php the_content(); ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>