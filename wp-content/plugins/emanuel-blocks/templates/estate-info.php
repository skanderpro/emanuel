<section class="estate-info">
	<div class="container">
		<div class="estate-info__inner">
			<div class="estate-info-left">
				<h3>
					<?php echo $settings['title'] ?>
				</h3>
				<p>
					<?php echo $settings['description'] ?>
				</p>
			</div>
			<div class="estate-info-right">
				<?php
				foreach ( $settings['items'] as $item ) {
				?>
                    <div class="estate-info-right-info">
                        <div class="estate-info-right-info-title"><?php echo $item['title']; ?></div>
                        <div class="estate-info-right-info-text">
	                        <?php echo $item['description']; ?>
                        </div>
                    </div>
					<?php
				}
				?>
			</div>
		</div>
	</div>
</section>
