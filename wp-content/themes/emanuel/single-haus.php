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

            $q = trim(sanitize_text_field($_GET['q']));
            $min_rooms = trim(sanitize_text_field($_GET['min_rooms']));
            $max_rooms = trim(sanitize_text_field($_GET['max_rooms']));
            $status = trim(sanitize_text_field($_GET['status']));

            $params = [];
            $meta_params = [];
            if (!empty($q)) {
                $params['s'] = $q;
            }

            if (!empty($min_rooms)) {
                $meta_params[] = [
                        'key'     => 'rooms_count',
                        'value'   => $min_rooms,
                        'type'    => 'NUMERIC',
                        'compare' => '>=',
                ];
            }

            if (!empty($max_rooms)) {
                $meta_params[] = [
                        'key'     => 'rooms_count',
                        'value'   => $max_rooms,
                        'type'    => 'NUMERIC',
                        'compare' => '<=',
                ];
            }
            if (!empty($status)) {
                $meta_params[] = [
                        'key'     => 'status',
                        'value'   => $status,
                        'compare' => '=',
                ];
            }

            if (!empty($meta_params)) {
                $params['meta_query'] = $meta_params;
            }

            $other_houses = get_posts([
                    'post_type' => 'haus',
                    'posts_per_page' => 3,
                    'post__not_in' => [get_the_ID()],
            ] + $params);

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
            <?php
            if (!empty($other_houses)) {
                ?>
                <section class="filters container">
                    <form class="filters-form" action="" method="get">
                        <input type="search" name="q" placeholder="z.B. Attika, Balkon..." value="<?php echo $q;?>" class="input input-search">
                        <select name="min_rooms" class="select">
                            <option value>Beliebig</option>
                            <option value="1" <?php echo selected($min_rooms, '1');  ?>>1+</option>
                            <option value="2" <?php echo selected($min_rooms, '2');  ?>>2+</option>
                        </select>
                        <select name="max_rooms" class="select">
                            <option value>Beliebig</option>
                            <option value="1" <?php echo selected($max_rooms, '1');  ?>>1+</option>
                            <option value="2" <?php echo selected($max_rooms, '2');  ?>>2+</option>
                        </select>
                        <select name="status" class="select">
                            <option value>alle</option>
                            <option value="rented" <?php echo selected($status, 'rented');  ?>>reserviert</option>
                            <option value="available" <?php echo selected($status, 'available');  ?>>verfügbar</option>
                        </select>
                        <button class="btn btn-ghost" type="submit">Filtern</button>
                    </form>
                </section>
                <section class="listings container">
                    <h2 class="section-title">Wohnungen</h2>
                    <div class="grid grid-3 listing-cards">
                        <!-- apartment card 1 -->
                        <?php
                        foreach ($other_houses as $other_house) {
                            $rooms_count = rwmb_get_value('rooms_count', [], $other_house->ID);
                            $price = rwmb_get_value('price', [], $other_house->ID);
                            $area = rwmb_get_value('area', [], $other_house->ID);
                            $haus_status = rwmb_get_value('status', [], $other_house->ID);
                            ?>
                            <a href="<?php echo get_the_permalink($other_house->ID) ?>" class="apartment-card card">
                                <div class="card-media">
                                    <img src="<?php echo get_the_post_thumbnail_url($other_house->ID); ?>" alt="<?php echo $other_house->post_title; ?>" onerror="this.src='data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==';">
                                    <?php
                                    if (!empty($haus_status)) {
                                        ?>
                                        <span class="status status-available">
                                        <?php
                                        $trans_map = [
                                            'rented' => 'reserviert',
                                            'available' => 'verfügbar'
                                        ];

                                            echo $trans_map[$haus_status] ?? $haus_status;
                                        ?>
                                        </span>
                                        <?php
                                    }
                                    ?>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title"><?php echo $other_house->post_title; ?></h3>
                                    <ul class="card-meta">
                                        <?php
                                        if (!empty($rooms_count)) {
                                            ?>
                                            <li>Zimmer: <?php echo $rooms_count; ?></li>
                                            <?php
                                        }
                                        if (!empty($area)) {
                                            ?>
                                            <li><?php echo $area;?> m²</li>
                                            <?php
                                        }
                                        if (!empty($price)) {
                                            ?>
                                            <li><?php echo $price; ?></li>
                                            <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </a>
                            <?php
                        }
                        ?>


                    </div>
                </section>
                <?php
            }
            ?>

	<?php

		} // end while
	}
	?>
</main>

<?php
get_footer();
