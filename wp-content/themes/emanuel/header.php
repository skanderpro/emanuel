<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php
    wp_head();
    ?>
    <title><?php wp_title(); ?></title>
</head>
<body <?php body_class(); ?>>
<div class="wrapper  ">

<header class="header">
    <div class="container">
        <div class="header__inner">
            <div class="header__inner-logo">
                <a href="<?php echo home_url('/'); ?>"><img src="<?php echo EMANUEL_ASSETS_URL; ?>img/logo.svg" alt="" /></a>
            </div>
            <?php
            if (has_nav_menu('primary_menu')) {
                wp_nav_menu([
                    'theme_location' => 'primary_menu',
                    'container_class' => 'header__inner-nav',
                    'menu_class' => 'nav-list',
                    'link_before' => '<li class="nav-list-item">',
                    'walker' => new Emanuel\Walker\MainMenuWalker(),
                ]);
            }
            ?>
            <nav class="header__inner-nav">
                <ul class="nav-list">
                    <li class="nav-list-item drop-down">
            <span class="nav-list-item-btn">
              Angebot
              <img src="<?php echo EMANUEL_ASSETS_URL; ?>img/arrow-header.svg" alt="" />
            </span>
                        <div class="nav-list-item-drop-down">
                            <ul>
                                <li>
                                    <a href="Portfoliomanagement.html">Portfoliomanagement</a>
                                </li>
                                <li>
                                    <a href="kaufVerkauf.html">Kauf & Verkauf von Immobilien</a>
                                </li>
                                <li>
                                    <a href="Hypothekenmanagement.html"
                                    >Hypothekenmanagement & Finanzierungsoptimierung</a
                                    >
                                </li>
                                <li>
                                    <a href="Projektentwicklung.html">Projektentwicklung</a>
                                </li>
                                <li>
                                    <a href="Immobilienbewirtschaftung.html"
                                    >Immobilienbewirtschaftung</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-list-item">
                        <a href="mietobjekte.html">Mietobjekte</a>
                    </li>
                    <li class="nav-list-item">
                        <a href="kaufobjekte.html">Kaufobjekte</a>
                    </li>
                    <li class="nav-list-item drop-down">
            <span class="nav-list-item-btn">
              Über uns
              <img src="<?php echo EMANUEL_ASSETS_URL; ?>img/arrow-header.svg" alt="" />
            </span>
                        <div class="nav-list-item-drop-down">
                            <ul>
                                <li>
                                    <a href="unternehmen.html">Unternehmen</a>
                                </li>
                                <li>
                                    <a href="team.html">Team</a>
                                </li>
                                <li>
                                    <a href="karriere.html">Karriere</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-list-item">
                        <a href="news.html">News</a>
                    </li>
                    <a href="Kontakt.html" class="global-btn">Kontakt</a>
                </ul>
            </nav>
            <div class="header__inner-btn">
                <a href="Kontakt.html" class="global-btn">Kontakt</a>
            </div>
            <div class="header__menu-btn">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</header>
