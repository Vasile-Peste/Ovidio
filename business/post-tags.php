<?php

$tags = wp_get_post_tags(get_the_ID());

?>
<?php if (count($tags) > 0): ?>

<?php endif; ?>