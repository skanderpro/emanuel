</div>
<footer class="footer">
    <div class="footer-wrapper">
        <div class="container">
            <div class="footer__inner">
                <div class="footer__inner-info">
                    <div class="footer__inner-info-logo">
                        <img src="<?php echo EMANUEL_ASSETS_URL; ?>img/logo-white.svg" alt="" />
                    </div>
                    <div class="footer__inner-info-box">
                        <div class="footer__inner-info-namecompany">
                            EMANUEL Immobilien AG
                        </div>
                        <div class="footer__inner-info-addres">
                            Luzernerstrasse 8 CH-6045 Meggen
                        </div>
                        <div class="footer__inner-info-link">
                            <div class="footer__inner-info-link-item">
                                <img src="<?php echo EMANUEL_ASSETS_URL; ?>img/icon/phone-icon.svg" alt="" />
                                <a href="tel:41412485050">+41 41 248 50 50</a>
                            </div>
                            <div class="footer__inner-info-link-item">
                                <img src="<?php echo EMANUEL_ASSETS_URL; ?>img/icon/email-icon.svg" alt="" />
                                <a href="mailto:kontakt@emanuel.ch">kontakt@emanuel.ch</a>
                            </div>
                            <div class="footer__inner-info-link-item">
                                <img src="<?php echo EMANUEL_ASSETS_URL; ?>img/icon/in-icon.svg" alt="" />
                                <a href="#">Follow us</a>
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
