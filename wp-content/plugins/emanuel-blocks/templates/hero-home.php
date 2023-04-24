<section
	class="header-content"
	style="margin-top: 30px; margin-bottom: 90"
>
	<div class="container-right">
		<div class="header-content__inner">
			<div class="header-content__inner-text">
				<div class="header-content__inner-text-con">
					<div class="header-content-title">
						<h1>
                            <?php echo $settings['title']; ?>
                        </h1>
					</div>
					<div class="header-content-text">
						<p>
							<?php echo $settings['description']; ?>
						</p>
					</div>
				</div>
			</div>
			<div class="header-content__inner-img">
				<img src="<?php echo $settings['image']['url']; ?>" alt="<?php echo $settings['title']; ?>"/>
			</div>
		</div>
	</div>
</section>