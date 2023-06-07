<section class="link stage">
    <div class="container">
        <div class="link__inner">
            <div class="link__inner-title">
                <h1><?php echo $settings['title']; ?></h1>
            </div>
            <div class="link__inner-box">
                <?php
                foreach ( $settings['items'] as $item ) {
                    ?>
                    <a href="<?php echo $item['url']; ?>" class="link__inner-item">
                        <div class="link__inner-item-box">
                            <div class="link__inner-item-title"><?php echo $item['title']; ?></div>
                            <div class="link__inner-item-text">
                                <?php echo $item['description']; ?>
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