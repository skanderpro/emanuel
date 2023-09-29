<?php
global $opt_name;

$title = Redux::get_option($opt_name, 'apartments_title');
$description = Redux::get_option($opt_name, 'apartments_description');
$emptyText = Redux::get_option($opt_name, 'apartments_empty_text', 'No items found');

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
								$images = rwmb_get_value('images');
								foreach ($images as $image) {
								?>
									<picture>
										<img src="<?php echo $image; ?>" alt="" />
									</picture>
								<?php
								}
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
								<div class="rental-item-info-params">
                                    <?php
                                    $rooms = rwmb_the_value( 'rooms', [], null, false );
                                    $floor = rwmb_the_value( 'floor', [], null, false );
                                    $livingSpace = rwmb_the_value( 'living_space', [], null, false );
                                    
                                    if (!empty($rooms)) {
                                        ?>
                                        <div class="rental-item-info-params-item">
                                            <div class="rental-item-info-params-item-title">
                                                Räume
                                            </div>
                                            <div class="rental-item-info-params-item-label"><?php echo $rooms; ?></div>
                                        </div>
                                        <?php
                                    }
                                    if (!empty($floor)) {
                                        ?>
                                        <div class="rental-item-info-params-item">
                                            <div class="rental-item-info-params-item-title">
                                                Stockwerk
                                            </div>
                                            <div class="rental-item-info-params-item-label">
			                                    <?php echo $floor; ?>
                                            </div>
                                        </div>    
                                        <?php
                                    }
                                    if (!empty($livingSpace)) {
                                        ?>
                                        <div class="rental-item-info-params-item">
                                            <div class="rental-item-info-params-item-title">
											Grösse
                                            </div>
                                            <div class="rental-item-info-params-item-label"><?php echo $livingSpace; ?></div>
                                        </div>
                                        <?php
                                    }
                                    ?>
								</div>
							</div>
						</a>
					<?php

					} // end while
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
