<div class="news-list">
    <?php
    global $opt_name;

    $cat = Redux::get_option($opt_name, 'blog_sidebar_category');
    $query = new WP_Query(array(
	    'cat' => $cat,
	    'post_status' => 'publish'
    ));
    while ($query->have_posts()) {
	    $query->the_post();
	    ?>
        <a href="<?php the_permalink(); ?>" class="news-list-item">
            <div class="news-list-item-title">
                <?php the_title(); ?>
            </div>
            <div class="news-list-item-text">
                <?php the_excerpt(); ?>
            </div>
        </a>
        <?php
    }

    wp_reset_query();
    ?>
</div>
