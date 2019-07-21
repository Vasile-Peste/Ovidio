<?php

$menu_names = [
    "footer_first_column",
    "footer_second_column",
    "footer_third_column",
    "footer_fourth_column",
];

?>
<?php foreach ($menu_names as $menu_name): $menu = wp_get_nav_menu_object(get_nav_menu_locations()[$menu_name]); ?>
<?php if ($menu): ?>
<!-- Footer Menu -->
<div class="flex flex--column container">
    <h4 class="title"><?php echo $menu -> name; ?></h4>
    <nav class="flex flex--column nav">
        <?php foreach (wp_get_nav_menu_items($menu -> term_id) as $item): $target = $item -> target; ?>
        <a href="<?php echo $item -> url; ?>"<?php if ($target): ?> target="<?php echo $target; ?>"<?php endif; ?> class="nav__item"><?php echo $item -> title; ?></a>
        <?php endforeach; ?>
    </nav>
</div>
<!-- / Footer Menu -->
<?php endif; ?>
<?php endforeach; ?>