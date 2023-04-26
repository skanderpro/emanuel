<div class="box-info-stage">
	<div class="container">
		<div class="box-info-stage__inner">
			<div class="box-info-stage-title"><?php echo $settings['title']; ?></div>
			<div class="box-info-stage-box">
				<?php
				foreach ( $settings['items'] as $item ) {
				?>
				    <div class="box-info-stage-card">
					    <?php echo $item['svg']; ?>

                        <div class="box-info-stage-card-title">
                            <?php echo $item['title']; ?>
                        </div>
                        <div class="box-info-stage-card-text">
                            <?php echo $item['description']; ?>
                        </div>
				    </div>
					<?php
				}
				?>
			</div>
		</div>
	</div>
</div>


