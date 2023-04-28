<section class="services">
	<div class="container">
		<div class="services__inner">
			<div class="services-item simple-text">
				<p>
					<?php echo $settings['description']; ?>
				</p>
			</div>
			<?php
			$query = new WP_Query(array(
				'post_type' => 'services',
				'post_status' => 'publish'
			));
			while ($query->have_posts()) {
				$query->the_post();
				?>
                <div class="services-item">
                    <div class="services-item-head">
                        <div class="services-item-head-img">
                            <picture>
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" /></picture>
                        </div>
                    </div>
                    <div class="services-item__inner">
                        <div class="services-item__inner-text">
                            <h4><?php the_title(); ?></h4>
                        </div>

                        <a href="<?php the_permalink(); ?>" class="global-outline-btn">Learn more</a>
                    </div>
                </div>
				<?php
			}

			wp_reset_query();
			?>

		</div>
	</div>
</section>