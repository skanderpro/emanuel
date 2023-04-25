<section class="link">
    <div class="container">
        <div class="link__inner">
            <div class="link__inner-text">
                <p><?php echo $settings['subtitle']; ?></p>
            </div>
            <div class="link__inner-title">
                <h1>
	                <?php echo $settings['title']; ?>
                </h1>
            </div>
            <div class="link__inner-box">
                <?php
                foreach ( $settings['items'] as $item ) {
                    ?>
                    <a href="<?php echo $item['url']['url']; ?>" class="link__inner-item">
                        <div class="link__inner-item-title"><?php echo $item['title']; ?></div>
                        <img src="<?php echo EMANUEL_ASSETS_URL; ?>img/arrow-gold-circle.svg" alt=""/>
                    </a>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>