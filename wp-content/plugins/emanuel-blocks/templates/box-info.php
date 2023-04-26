<div class="box-info <?php echo $settings['order'] == 'reverse' ? 'reverse' : ''; ?>">
    <div class="container">
        <div class="box-info__inner">
            <div class="box-info-title">
                <p>
					<?php echo $settings['description']; ?>
                </p>
            </div>
            <div class="box-info-list">
                <ul>
					<?php
					foreach ( $settings['items'] as $item ) {
						?>
                        <li>
                            <div class="box-info-list-info">
								<?php
								if ( ! empty( $item['svg'] ) ) {
                                    ?>
                                    <div class="box-info-list-info-icon">
									<?php
                                }

                                echo $item['svg'];
                                echo $item['title'];

                                if ( ! empty( $item['svg'] ) ) {
                                    ?>
                                    <div class="box-info-list-info-icon">
                                    <?php
                                }
                                ?>
                            </div>
                        </li>
						<?php
					}
					?>
                </ul>
            </div>
        </div>
    </div>
</div>