<div class="news-list">
    <?php
    $query = new WP_Query(array(
	    'post_type' => 'news',
	    'post_status' => 'publish'
    ));
    while ($query->have_posts()) {
	    $query->the_post();
	    ?>
        <div class="news-list-item">
            <div class="news-list-item-title">
                <?php the_title(); ?>
            </div>
            <div class="news-list-item-text">
                <?php the_excerpt(); ?>
            </div>
        </div>
        <?php
    }

    wp_reset_query();
    ?>
</div>
