<?php
$suggested_post = get_next_post();

if (empty($suggested_post)) {
    $suggested_post = get_previous_post();

    if (empty($suggested_post)) {
        return;
    }
}

$suggested_post_uri = get_permalink($suggested_post -> ID);
$suggested_post_title = $suggested_post -> post_title;
?>
<hr class="flex flex--full separator">
<!-- Post Suggested -->
<aside class="flex flex--full flex--center suggested-post">
    <div class="flex flex--nine flex--center">
        <div class="flex flex--column">
            <p class="paragraph"><?php _e("You may also be interested in"); ?></p>
            <a href="<?php echo $suggested_post_uri; ?>"><?php echo $suggested_post_title; ?></a>
        </div>
    </div>
</aside>
<!-- / Post Suggested -->
<hr class="flex flex--full separator separator--no-margin-bottom">