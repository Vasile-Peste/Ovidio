<?php if (have_posts()): while (have_posts()): the_post(); ?>
<!-- Post Preview -->
<article class="flex flex--full preview">
    <h2 class="title title--no-separator">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h2>
    <?php render("post_meta"); ?>
    <?php $paragraph_preview = WordPressUtilities::get_post_first_paragraph(); ?>
    <?php if ($paragraph_preview && strlen($paragraph_preview) >= 10): ?>
    <p class="paragraph">
        <?php echo $paragraph_preview; ?>
    </p>
    <?php endif; ?>
    <div class="flex flex--full flex--center">
        <a href="<?php the_permalink(); ?>" class="flex flex--vertical button button--rounded">
            <?php _e("Read post"); ?>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 31.49 31.49" xml:space="preserve">
                <path d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"/>
            </svg>
        </a>
    </div>
</article>
<!-- / Post Preview -->
<hr class="flex flex--full separator">
<?php endwhile; render("pagination"); else: ?>
<p class="paragraph"><?php _e("No posts found"); ?>.</p>
<?php endif; ?>