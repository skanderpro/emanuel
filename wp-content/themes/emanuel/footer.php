<?php
global $opt_name;

$logo = Redux::get_option($opt_name, 'footer_logo');
$title = Redux::get_option($opt_name, 'contact_company');
$description = Redux::get_option($opt_name, 'contact_address');
$phone = Redux::get_option($opt_name, 'contact_phone');
$email = Redux::get_option($opt_name, 'contact_email');
$linkedin = Redux::get_option($opt_name, 'contact_linkedin');
?>
</div>
<footer class="footer">
    <div class="footer-wrapper">
        <div class="container">
            <div class="footer__inner">
                <div class="footer__inner-info">
                    <div class="footer__inner-info-logo">
                        <img src="<?php echo !empty($logo) ? $logo['url'] : ''; ?>" alt="" />
                    </div>
                    <div class="footer__inner-info-box">
                        <div class="footer__inner-info-namecompany">
                            <?php echo $title; ?>
                        </div>
                        <div class="footer__inner-info-addres">
                            <?php echo $description; ?>
                        </div>
                        <div class="footer__inner-info-link">
                            <div class="footer__inner-info-link-item">
                                <img src="<?php echo EMANUEL_ASSETS_URL; ?>img/icon/phone-icon.svg" alt="" />
                                <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
                            </div>
                            <div class="footer__inner-info-link-item">
                                <img src="<?php echo EMANUEL_ASSETS_URL; ?>img/icon/email-icon.svg" alt="" />
                                <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                            </div>
                            <div class="footer__inner-info-link-item">
                                <img src="<?php echo EMANUEL_ASSETS_URL; ?>img/icon/in-icon.svg" alt="" />
                                <a href="<?php echo $linkedin; ?>">Follow us</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer__inner-link">
                    <div class="footer__inner-link-item">
                        <?php
                        if (has_nav_menu('footer_menu_1')) {
                        ?>
                            <div class="footer__inner-link-item-title">
                                <?php echo wp_get_nav_menu_name('footer_menu_1');  ?>
                            </div>
                        <?php

                            wp_nav_menu([
                                'theme_location' => 'footer_menu_1',
                            ]);
                        }
                        ?>
                    </div>
                    <div class="footer__inner-link-item">
                        <?php
                        if (has_nav_menu('footer_menu_2')) {
                        ?>
                            <div class="footer__inner-link-item-title">
                                <?php echo wp_get_nav_menu_name('footer_menu_2');  ?>
                            </div>
                        <?php
                            wp_nav_menu([
                                'theme_location' => 'footer_menu_2',
                            ]);
                        }
                        ?>
                    </div>
                    <div class="footer__inner-link-item">
                        <?php
                        if (has_nav_menu('footer_menu_3')) {
                        ?>
                            <div class="footer__inner-link-item-title">
                                <?php echo wp_get_nav_menu_name('footer_menu_3');  ?>
                            </div>
                        <?php
                            wp_nav_menu([
                                'theme_location' => 'footer_menu_3',
                            ]);
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div data-component="cookie-popup" class="popup">
    <div class="popup__body">
        <div class="popup__conten">
            <button class="popup__close btn-close-popup" data-role="block">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_438_1543)">
                        <path d="M16 14.1146L22.6 7.51465L24.4853 9.39998L17.8853 16L24.4853 22.6L22.6 24.4853L16 17.8853L9.39998 24.4853L7.51465 22.6L14.1146 16L7.51465 9.39998L9.39998 7.51465L16 14.1146Z" fill="#ABACB5" />
                    </g>
                    <defs>
                        <clipPath id="clip0_438_1543">
                            <rect width="32" height="32" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </button>
            <div class="popup__title">Cookies</div>
            <div class="popup__title-text">
                Wir verwenden Cookies und Analysetools, um Ihnen den bestmöglichen
                Service zu gewährleisten. Wenn Sie die Website weiter nutzen, gehen
                wir von Ihrem Einverständnis aus. Weitere Infos finden Sie <a href="https://dev.emanuel.ch/impressum-datenschutz/">hier.</a>
            </div>
            <div class="popup__title-btn">
                <button class="global-btn" data-role="accept">Alle akzeptieren</button>
                <button class="global-btn global-grey-btn btn-close-popup" data-role="block">
                    Nur essentielle Cookies akzeptieren
                </button>
                <span class="popup-open"></span>
            </div>
        </div>
    </div>
</div>
<?php
wp_footer();
?>

</body>

</html>