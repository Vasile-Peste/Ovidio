<?php

global $wp_query;

$page = get_query_var("paged");
$max = intval($wp_query -> max_num_pages);

if ($page === 0) {
    $page = 1;
}

?>
<div class="flex flex--full flex--center flex--vertical pagination">
    <?php if ($page - 3 > 0): ?>
    <a href="<?php echo get_pagenum_link(1); ?>" class="link">1</a>
    <span class="ellipsis">…</span>
    <?php endif; ?>

    <?php if ($page - 2 > 0): ?>
    <a href="<?php echo get_pagenum_link($page - 2); ?>" class="link"><?php echo $page - 2; ?></a>
    <?php endif; ?>

    <?php if ($page - 1 > 0): ?>
    <a href="<?php echo get_pagenum_link($page - 1); ?>" class="link"><?php echo $page - 1; ?></a>
    <?php endif; ?>

    <span class="link link--active"><?php echo $page; ?></span>
    
    <?php if ($page + 1 <= $max): ?>
    <a href="<?php echo get_pagenum_link($page + 1); ?>" class="link"><?php echo $page + 1; ?></a>
    <?php endif; ?>

    <?php if ($page + 2 <= $max): ?>
    <a href="<?php echo get_pagenum_link($page + 2); ?>" class="link"><?php echo $page + 2; ?></a>
    <?php endif; ?>

    <?php if ($page + 3 < $max): ?>
    <span class="ellipsis">…</span>
    <?php endif; ?>

    <?php if ($page + 3 <= $max): ?>
    <a href="<?php echo get_pagenum_link($max); ?>" class="link"><?php echo $max; ?></a>
    <?php endif; ?>
</div>