<section class="services">
	<div class="container">
		<div class="services__inner">
			<div class="services-item simple-text">
				<p>
					<?php echo $settings['description']; ?>
				</p>
			</div>
			<?php

			foreach ( $settings['items'] as $item ) {
				?>
                <div class="services-item">
                    <div class="services-item-head">
                        <div class="services-item-head-img">
                            <picture>
                                <img src="<?php echo $item['image']['url'] ?? ''; ?>" alt="<?php echo $item['title']; ?>" /></picture>
                        </div>
                    </div>
                    <div class="services-item__inner">
                        <div class="services-item__inner-text">
                            <h4><?php echo $item['title']; ?></h4>
                        </div>

                        <a href="<?php echo $item['link']; ?>" class="global-outline-btn"><?php echo $item['btn_text']; ?></a>
                    </div>
                </div>
				<?php
			}

			wp_reset_query();
			?>

		</div>
	</div>
</section>