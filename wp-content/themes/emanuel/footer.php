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

<?php
wp_footer();
?>

</body>
</html>
