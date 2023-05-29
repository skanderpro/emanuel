<section class="team">
	<div class="container">
		<div class="team__inner">
			<div class="team-title">
				<h1>
					<?php echo $settings['title']; ?>
				</h1>
			</div>
			<div class="team-box">
				<?php
				foreach ( $settings['items'] as $item ) {
				?>
					<div class="team-box-item">
						<div class="team-box-item-ava">
							<picture>
								<img src="<?php echo $item['image']['url']; ?>" alt="<?php echo $item['title']; ?>"/>
							</picture>
						</div>
						<div class="team-box-item-title">
							<?php echo $item['title']; ?>
						</div>
						<div class="team-box-item-text">
							<?php echo $item['description']; ?>
						</div>
						<a href="#" class="global-btn">Kontaktieren Sie mich</a>
					</div>
					<?php
				}
				?>
			</div>
		</div>
	</div>
</section>

