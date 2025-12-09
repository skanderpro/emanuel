<?php
global $opt_name;

$blogTitle = Redux::get_option($opt_name, 'blog_title');

get_header();
?>
<main>
	<?php
	if (have_posts()) {
		while (have_posts()) {
			the_post();

            $features = wp_get_post_terms( get_the_ID(), 'haus_features' );
            $highlight = wp_get_post_terms( get_the_ID(), 'haus_highlight' );

            $subtitle = rwmb_get_value('subtitle');
            $available_from = rwmb_get_value('available_from');
            $flats_count = rwmb_get_value('flats_count');
            $standart = rwmb_get_value('standart');
            $address = rwmb_get_value('address');
            $address_description = rwmb_get_value('address_description');
            $address_image = rwmb_get_value('address_image');
            $highlight_image = rwmb_get_value('highlight_image');

            $features_arr = [];
            foreach ($features as $feature) {
                $features_arr[] = $feature->name;
            }

            $highlight_arr = [];
            foreach ($highlight as $highlight) {
                $highlight_arr[] = $highlight->name;
            }



	?>
            <section class="hero container">
                <div class="hero-inner">
                    <div class="hero-left">
                        <h1 class="hero-title"><?php the_title(); ?></h1>
                        <?php
                        if (!empty($subtitle)) {
                            ?>
                            <p class="hero-sub"><?php echo $subtitle; ?></p>
                            <?php
                        }

                        ?>

                        <div class="badges">
                            <?php
                            if (!empty($available_from)) {
                                $date = new DateTime($available_from);
                                ?>
                                <span class="badge">Bezug: <?php echo $date->format('F Y'); ?> </span>
                                <?php
                            }
                            if (!empty($flats_count)) {
                                ?>
                                <span class="badge">Einheiten: <?php echo $flats_count; ?> Wohnungen</span>
                                <?php
                            }
                            if (!empty($standart)) {
                                ?>
                                <span class="badge">Standard: <?php echo $standart; ?></span>
                                <?php
                            }
                            if (!empty($features_arr)) {
                                ?>
                                <span class="badge">Energie: <?php echo implode(', ', $features_arr); ?></span>
                                <?php
                            }
                            ?>
                        </div>

                        <div class="hero-actions">
                            <a class="global-btn" href="#">Exposé anfordern</a>
                            <a class="global-btn reverse" href="#">Besichtigung vereinbaren</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="info-panels container">
                <div class="grid grid-2">
                    <?php
                    if (!empty($address) || !empty($address_description) || !empty($address_image)) {
                        ?>
                        <article class="panel panel-card">
                            <h3 class="panel-title">Lage</h3>
                            <?php
                            if (!empty($address)) {
                                ?>
                                <p class="muted"><?php echo $address; ?></p>
                                <?php
                            }
                            if (!empty($address_description)) {
                                ?>
                                    <p><?php echo $address_description; ?></p>
                                <?php
                            }
                            if (!empty($address_image)) {
                                ?>
                                <img class="map-placeholder" src="<?php echo $address_image['full_url']; ?>" alt="4.5-Zimmer-Attika" onerror="this.src='data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==';">
                                <?php
                            }
                            ?>
                        </article>
                        <?php
                    }
                    if (!empty($highlight_image) || !empty($highlight_arr)) {
                        ?>
                        <article class="panel panel-card">
                            <h3 class="panel-title">Highlights</h3>
                            <?php
                            if (!empty($highlight_arr)) {
                                ?>
                                <ul class="highlights-list">
                                    <?php
                                    foreach ($highlight_arr as $highlight) {
                                        echo '<li>' . $highlight . '</li>';
                                    }
                                    ?>
                                </ul>
                                <?php
                            }
                            if (!empty($highlight_image)) {
                                ?>
                                <img class="map-placeholder" src="<?php echo $highlight_image['full_url']; ?>" alt="4.5-Zimmer-Attika" onerror="this.src='data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==';">
                                <?php
                            }
                            ?>


                        </article>
                        <?php
                    }
                    ?>



                </div>
            </section>
            <section class="filters container">
                <form class="filters-form" action="#" method="get">
                    <input type="search" name="q" placeholder="z.B. Attika, Balkon..." class="input input-search">
                    <select name="min_rooms" class="select">
                        <option>Beliebig</option>
                        <option>1+</option>
                        <option>2+</option>
                    </select>
                    <select name="max_rent" class="select">
                        <option>Beliebig</option>
                    </select>
                    <select name="status" class="select">
                        <option>alle</option>
                    </select>
                    <button class="btn btn-ghost" type="submit">Filtern</button>
                </form>
            </section>
            <section class="listings container">
                <h2 class="section-title">Wohnungen</h2>
                <div class="grid grid-3 listing-cards">
                    <!-- apartment card 1 -->
                    <article class="apartment-card card">
                        <div class="card-media">
                            <img src="./img/swiper/swiper-img-1.jpg" alt="2.5-Zimmer-Wohnung" onerror="this.src='data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==';">
                            <span class="status status-available">verfügbar</span>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">2.5-Zimmer-Wohnung</h3>
                            <ul class="card-meta">
                                <li>Zimmer: 2.5</li>
                                <li>63 m²</li>
                                <li>2'350 CHF</li>
                            </ul>
                        </div>
                    </article>

                    <!-- apartment card 2 -->
                    <article class="apartment-card card">
                        <div class="card-media">
                            <img src="./img/swiper/swiper-img-2.jpg" alt="3.5-Zimmer-Wohnung" onerror="this.src='data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==';">
                            <span class="status status-reserved">reserviert</span>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">3.5-Zimmer-Wohnung</h3>
                            <ul class="card-meta">
                                <li>Zimmer: 3.5</li>
                                <li>86 m²</li>
                                <li>2'980 CHF</li>
                            </ul>
                        </div>
                    </article>

                    <!-- apartment card 3 -->
                    <article class="apartment-card card">
                        <div class="card-media">
                            <img src="./img/swiper/swiper-img-3.jpg" alt="4.5-Zimmer-Attika" onerror="this.src='data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==';">
                            <span class="status status-available">verfügbar</span>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">4.5-Zimmer-Attika</h3>
                            <ul class="card-meta">
                                <li>Zimmer: 4.5</li>
                                <li>121 m²</li>
                                <li>3'890 CHF</li>
                            </ul>
                        </div>
                    </article>
                </div>
            </section>
	<?php

		} // end while
	}
	?>
</main>
<script src="/wp-content/themes/emanuel/assets/dist/files/js/swiper-bundle.min.js"></script>
<script>
	const swiper = new Swiper('.rental-detal-swiper', {
		loop: false,
		slidesPerView: 1.2,
		spaceBetween: 32,
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		breakpoints: {
			320: {
				slidesPerView: 1.2,
				spaceBetween: 20,
			},
			768: {
				slidesPerView: 2.5,
				spaceBetween: 40,

			},
		},
	})
</script>
<?php
get_footer();
