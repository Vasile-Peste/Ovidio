<?php

$date = get_the_date();
$author_url = get_author_posts_url(get_the_author_meta("ID"));
$author_display_name = get_the_author_meta("display_name");

?>
<aside class="flex flex--full">
	<span class="meta">
        <?php echo $date; ?>, <a href="<?php echo $author_url; ?>" class="link"><?php echo $author_display_name; ?></a>
    </span>
</aside>