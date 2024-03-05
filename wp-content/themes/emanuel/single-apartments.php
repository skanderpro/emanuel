<?php
global $opt_name;

$blogTitle = Redux::get_option($opt_name, 'blog_title');

get_header();
?>
<link rel="stylesheet" href="/wp-content/themes/emanuel/assets/dist/files/css/swiper-bundle.min.css" />
<main>
	<?php
	if (have_posts()) {
		while (have_posts()) {
			the_post();

	?>
			<section class="rental-detal">
				<div class="container">
					<div class="rental-detal-title">
						<h1><?php the_title(); ?></h1>
					</div>
				</div>

				<div class="swiper-container">
					<div class="swiper rental-detal-swiper">
						<div class="swiper-wrapper">
							<?php
							$images = rwmb_get_value('images');
							foreach ($images as $image) {
							?>
								<div class="swiper-slide">
									<picture>
										<img src="<?php echo $image; ?>" alt="" />
									</picture>
								</div>
							<?php
							}
							?>
						</div>

						<div class="swiper-button-prev">
							<img src="/wp-content/themes/emanuel/assets/dist/img/icon/arrow-prev.svg" alt="" />
						</div>
						<div class="swiper-button-next">
							<img src="/wp-content/themes/emanuel/assets/dist/img/icon/arrow-next.svg" alt="" />
						</div>
					</div>
				</div>

				<div class="container">
					<div class="rental-detal__inner">
						<div class="rental-detal-left">
							<div class="rental-detal-location">
								<img src="/wp-content/themes/emanuel/assets/dist/img/icon/location.svg" alt="" />
								<?php rwmb_the_value('address') ?>
							</div>
							<div class="rental-detal-description">
								<div class="rental-detal-subtitle">Beschreibung</div>
								<div class="rental-detal-text elementor-widget-container">
									<?php the_content(); ?>
								</div>
							</div>

							<?php
							$terms = get_the_terms(get_post(), 'apartments_props');
							if ($terms) {
							?>
								<div class="rental-detal-property">
									<div class="rental-detal-subtitle">Details der Immobilie</div>
									<ul>
										<?php
										foreach ($terms as $term) {
										?>
											<li>
												<?php echo $term->name; ?>
												<img src="/wp-content/themes/emanuel/assets/dist/img/icon/check.svg" alt="" />
											</li>
										<?php
										}
										?>
									</ul>
								</div>
							<?php
							}

							$contact = rwmb_get_value('contact');
							if (!empty($contact)) {
							?>
								<div class="rental-detal-contact">
									<div class="rental-detal-subtitle">Kontakt zur Besichtigung</div>
									<div class="rental-detal-contact-phone">
										<img src="/wp-content/themes/emanuel/assets/dist/img/icon/phone.svg" alt="" />
										<a href="tel:<?php echo $contact; ?>"><?php echo $contact; ?></a>

									</div>
								</div>
							<?php
							}
							?>
						</div>
						<div class="rental-detal-right">
							<div class="rental-detal-params">
								<?php
								$rooms = rwmb_the_value('rooms', [], null, false);
								$floor = rwmb_the_value('floor', [], null, false);
								$livingSpace = rwmb_the_value('living_space', [], null, false);
								$plan = rwmb_the_value('plan', [], null, false);
								$availability = rwmb_the_value( 'availability', [], null, false );
								$price = rwmb_the_value( 'price', [], null, false );

                                $planUrl = '';
                                if (!empty($plan)) {
                                    $planPost = get_post($plan);
                                    if (!empty($planPost)) {
                                        $planUrl = $planPost->guid;
                                    }
                                }

								if (!empty($rooms)) {
								?>
									<div class="rental-detal-params-item">
										<div class="rental-detal-params-item-title">Räume</div>
										<div class="rental-detal-params-item-label"><?php echo $rooms; ?></div>
									</div>
								<?php
								}
								if (!empty($floor)) {
								?>
									<div class="rental-detal-params-item">
										<div class="rental-detal-params-item-title">Stockwerk</div>
										<div class="rental-detal-params-item-label"><?php echo $floor; ?></div>
									</div>
								<?php
								}
								if (!empty($livingSpace)) {
								?>
									<div class="rental-detal-params-item">
										<div class="rental-detal-params-item-title">
											Grösse
										</div>
										<div class="rental-detal-params-item-label"><?php echo $livingSpace; ?></div>
									</div>
								<?php
								}
								if (!empty($planUrl)) {
									?>
                                    <div class="rental-detal-params-item">
                                        <div class="rental-detal-params-item-title">
                                            Planen
                                        </div>
                                        <a target="_blank" href="<?php echo $planUrl; ?>" class="rental-detal-params-item-label">Herunterladen</a>
                                    </div>
									<?php
								}
								if (!empty($availability)) {
									?>
                                    <div class="rental-detal-params-item">
                                        <div class="rental-detal-params-item-title">
                                            Verfügbarkeit
                                        </div>
                                        <div class="rental-detal-params-item-label"><?php echo $availability; ?></div>
                                    </div>
									<?php
								}
								if (!empty($price)) {
									?>
                                    <div class="rental-detal-params-item">
                                        <div class="rental-detal-params-item-title">
                                            Preis
                                        </div>
                                        <div class="rental-detal-params-item-label"><?php echo $price; ?></div>
                                    </div>
									<?php
								}
								?>
							</div>
						</div>
					</div>
				</div>
			</section>
	<?php

		} // end while
	}
	?>
</main>
<script src="/wp-content/themes/emanuel/assets/dist/files/js/swiper-bundle.min.js"></script>
<script>
	const swiper = new Swiper('.rental-detal-swiper', {
		loop: false,
		slidesPerView: 1.2,
		spaceBetween: 32,
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		breakpoints: {
			320: {
				slidesPerView: 1.2,
				spaceBetween: 20,
			},
			768: {
				slidesPerView: 2.5,
				spaceBetween: 40,

			},
		},
	})
</script>
<?php
get_footer();
