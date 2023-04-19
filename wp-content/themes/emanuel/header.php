<?php
global $opt_name;
$logo = Redux::get_option($opt_name, 'header_logo');
$ctaText = Redux::get_option($opt_name, 'header_cta_text');
$ctaUrl = Redux::get_option($opt_name, 'header_cta_url');
?>
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
                <a href="<?php echo home_url('/'); ?>"><img src="<?php echo !empty($logo) ? $logo['url'] : '' ; ?>" alt="" /></a>
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
            <div class="header__inner-btn">
                <a href="<?php echo $ctaUrl; ?>" class="global-btn"><?php echo $ctaText; ?></a>
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
