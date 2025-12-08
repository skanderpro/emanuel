<?php
global $opt_name;

$title = Redux::get_option($opt_name, 'haus_title');
$description = Redux::get_option($opt_name, 'haus_description');
$emptyText = Redux::get_option($opt_name, 'haus_empty_text', 'No items found');

get_header();
?>
<section class="rental">
	<div class="container">
		<div class="rental__inner">
			<div class="rental-title">
				<h1><?php echo $title; ?></h1>
			</div>
			<div class="rental-text">
				<?php echo $description; ?>
			</div>
			<div class="rental-list">
				<?php
				if (have_posts()) {
					while (have_posts()) {
						the_post();

				?>
						<a href="<?php the_permalink(); ?>" class="rental-item">
							<div class="rental-item-gallery">
								<?php
								?>
                                <picture>
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
                                </picture>
								<?php
								?>
							</div>
							<div class="rental-item-info elementor-widget-container">
								<div class="rental-item-info-title">
									<?php the_title(); ?>
								</div>
								<div class="rental-item-info-location">
									<img src="/wp-content/themes/emanuel/assets/dist/img/icon/location.svg" alt="" />
									<?php rwmb_the_value('address') ?>
								</div>
								<div class="rental-item-info-text">
									<?php the_excerpt(); ?>
								</div>
							</div>
						</a>
					<?php

					} // end while

					the_posts_pagination([
						'prev_text' => '<span class="global-outline-btn"><<</span>',
						'next_text' => '<span class="global-outline-btn">>></span>',
						'before_page_number' => '<span class="global-outline-btn">',
						'after_page_number' => '</span>',
					]);
				} else {
					?>
					<div class="rental-text">
						<?php echo $emptyText; ?>
					</div>
				<?php
				}
				?>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
