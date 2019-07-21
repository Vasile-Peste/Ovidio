<?php

$suggested_post = get_next_post();

if (empty($suggested_post)) {
    $suggested_post = get_previous_post();
}

if (empty($suggested_post)) {
    return;
}

?>
<aside class="flex flex--full flex--center suggested suggested--gray">
    <div class="flex flex--eight flex--center">
        <div class="flex flex--column">
            <p class="paragraph"><?php _e("You may be interested also in"); ?></p>
            <h2 class="title title--no-separator"><?php echo $suggested_post -> post_title; ?></h2>
        </div>
        <div class="flex flex--full flex--center">
            <a href="<?php echo get_permalink($suggested_post -> ID); ?>" class="button button--rounded"><?php _e("Read post"); ?></a>
        </div>
    </div>
</aside>