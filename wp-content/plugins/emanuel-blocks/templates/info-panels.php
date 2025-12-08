<section class="info-panels container">
    <div class="grid grid-2">
        <?php
        $panels = is_array($settings['items']) ? $settings['items'] : [];

        foreach ($panels as $panel) {
            ?>
            <article class="panel panel-card">
                <h3 class="panel-title"><?php echo $panel['title']; ?></h3>
                <?php
                if (!empty($panel['subtitle'])) {
                    ?>
                    <p class="muted"><?php echo $panel['subtitle']; ?></p>
                    <?php
                }
                if (!empty($panel['description'])) {
                    ?>
                    <p><?php echo $panel['description']; ?></p>
                    <?php
                }
                if (!empty($panel['list']) && is_array($panel['list'])) {
                    ?>
                    <ul class="highlights-list">
                        <?php
                        foreach ($panel['list'] as $item) {
                            echo '<li>' . $item['title'] . '</li>';
                        }
                        ?>
                    </ul>
                    <?php
                }

                ?>


                <img class="map-placeholder" src="<?php echo $panel['image']['url']; ?>" alt="4.5-Zimmer-Attika" onerror="this.src='data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==';">

            </article>
            <?php
        }
        ?>
    </div>
</section>