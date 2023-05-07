<?php
global $opt_name;

$title = Redux::get_option($opt_name, 'apartments_title');
$description = Redux::get_option($opt_name, 'apartments_description');

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
					if ( have_posts() ) {
						while ( have_posts() ) {
							the_post();

							?>
							<a href="<?php the_permalink(); ?>" class="rental-item">
								<div class="rental-item-gallery">
									<picture><source srcset="/wp-content/themes/emanuel/assets/dist/img/rental-properties/high-end-1.webp" type="image/webp"><img src="/wp-content/themes/emanuel/assets/dist/img/rental-properties/high-end-1.jpg" alt="" /></picture>
									<picture><source srcset="/wp-content/themes/emanuel/assets/dist/img/rental-properties/high-end-2.webp" type="image/webp"><img src="/wp-content/themes/emanuel/assets/dist/img/rental-properties/high-end-2.jpg" alt="" /></picture>
									<picture><source srcset="/wp-content/themes/emanuel/assets/dist/img/rental-properties/high-end-3.webp" type="image/webp"><img src="/wp-content/themes/emanuel/assets/dist/img/rental-properties/high-end-3.jpg" alt="" /></picture>
									<picture><source srcset="/wp-content/themes/emanuel/assets/dist/img/rental-properties/high-end-4.webp" type="image/webp"><img src="/wp-content/themes/emanuel/assets/dist/img/rental-properties/high-end-4.jpg" alt="" /></picture>
								</div>
								<div class="rental-item-info">
									<div class="rental-item-info-title">
										<?php the_title(); ?>
									</div>
									<div class="rental-item-info-location">
										<img src="/wp-content/themes/emanuel/assets/dist/img/icon/location.svg" alt="" />
										<?php rwmb_the_value( 'address' ) ?>
									</div>
									<div class="rental-item-info-text">
										<?php the_excerpt(); ?>
									</div>
									<div class="rental-item-info-params">
										<div class="rental-item-info-params-item">
											<div class="rental-item-info-params-item-title">
												Rooms
											</div>
											<div class="rental-item-info-params-item-label"><?php rwmb_the_value( 'rooms' ) ?></div>
										</div>
										<div class="rental-item-info-params-item">
											<div class="rental-item-info-params-item-title">
												Living space
											</div>
											<div class="rental-item-info-params-item-label">
												<?php rwmb_the_value( 'living_space' ) ?>
											</div>
										</div>
										<div class="rental-item-info-params-item">
											<div class="rental-item-info-params-item-title">
												Floor
											</div>
											<div class="rental-item-info-params-item-label"><?php rwmb_the_value( 'floor' ) ?></div>
										</div>
									</div>
								</div>
							</a>
							<?php

						} // end while
					}
					?>
				</div>
			</div>
		</div>
	</section>
<?php
get_footer();
