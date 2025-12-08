<section class="hero container">
    <div class="hero-inner">
        <div class="hero-left">
            <h1 class="hero-title"><?php echo $settings['title']; ?></h1>
            <p class="hero-sub"><?php echo $settings['subtitle']; ?></p>

            <div class="badges">
                <?php
                $items = is_array($settings['items']) ? $settings['items'] : [];
                foreach ($items as $item) {
                    echo '<span class="badge">' . ($item['title'] ?: '') . '</span>';
                }
                ?>
            </div>

            <div class="hero-actions">
                <a class="global-btn" href="#"><?php echo $settings['primary_link_text']; ?></a>
                <a class="global-btn reverse" href="<?php echo $settings['secondary_link_url']; ?>"><?php echo $settings['secondary_link_text']; ?></a>
            </div>
        </div>
    </div>
</section>