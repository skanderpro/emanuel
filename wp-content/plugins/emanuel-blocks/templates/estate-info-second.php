<div class="estate-info-second">
	<div class="container">
		<div class="estate-info-second__inner">
			<div class="estate-info-second-left">
				<p class="gray">
					<?php echo $settings['description'] ?>
				</p>
				<h3><?php echo $settings['title'] ?></h3>

				<p class="bold">
					<?php echo $settings['second_description'] ?>
				</p>
			</div>
			<div class="estate-info-second-right">
				<div class="estate-info-second-img">
					<picture>
                        <img src="<?php echo $settings['image']['url']; ?>" alt="<?php echo $settings['title']; ?>"/>
                    </picture>
				</div>
			</div>
		</div>
	</div>
</div>
