<?php
global $opt_name;

$blogTitle = Redux::get_option($opt_name, 'blog_title');

get_header();
?>
    <main>
        <section class="news">
            <div class="container">
                <div class="news__inner">
                    <div class="news-title">
                        <h1><?php echo $blogTitle; ?></h1>
                    </div>
                    <div class="news-container">
                        <div class="news-post">
	                        <?php
	                        if ( have_posts() ) {
		                        while ( have_posts() ) {
			                        the_post();

			                        ?>
                                    <a href="<?php the_permalink(); ?>" class="news-post-item">
                                        <div class="news-post-item-img">
                                            <picture>
                                                <img src="<?php the_post_thumbnail_url(); ?>" alt="" />
                                            </picture>
                                        </div>
                                        <div class="news-post-item-title">
                                            <?php the_title(); ?>
                                        </div>
                                        <div class="news-post-item-text">
                                            <?php the_excerpt(); ?>
                                        </div>
                                    </a>
                                    <?php

		                        } // end while
	                        }
	                        ?>
                        </div>
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php
get_footer();