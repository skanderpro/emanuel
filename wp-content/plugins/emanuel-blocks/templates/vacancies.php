<?php
if (!empty($vacancies)) {
    ?>
    <section class="link stage">
        <div class="container">
            <div class="link__inner">
				<?php
				if (!empty($settings['title'])) {
					?>
                    <div class="link__inner-title">
                        <h1><?php echo $settings['title']; ?></h1>
                    </div>
					<?php
				}
				?>
                <div class="link__inner-box">
					<?php
					foreach ( $vacancies as $vacancy ) {
						$url = rwmb_the_value('url', [], $vacancy->ID, false);
						?>
                        <a href="<?php echo $url; ?>" class="link__inner-item">
                            <div class="link__inner-item-box">
                                <div class="link__inner-item-title"><?php echo $vacancy->post_title; ?></div>
                                <div class="link__inner-item-text">
									<?php echo $vacancy->post_content; ?>
                                </div>
                            </div>

                            <img src="<?php echo EMANUEL_ASSETS_URL; ?>img/arrow-gold-circle.svg" alt="" />
                        </a>
						<?php
					}
					?>
                </div>
            </div>
        </div>
    </section>
    <?php
}
