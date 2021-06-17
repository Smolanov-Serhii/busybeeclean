<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package busybeeclean
 */

?>

	<footer id="footer" class="footer">
        <div class="footer__container main-container">
            <div class="footer__logo">
                <?php
                the_custom_logo();
                ?>
            </div>
            <div class="footer__navigate">
                <nav class="footer__menu footer__item">
                    <h3>Service</h3>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer-menu',
                            'menu_id'        => 'footer-menu',
                        )
                    );
                    ?>
                </nav>
                <div class="footer__contacts footer__item">
                    <h3>Contacts</h3>
                    <a href="tel:<?php echo the_field('phone', 'options') ?>"><?php echo the_field('phone', 'options') ?></a>
                    <a href="tel:<?php echo the_field('phone-2', 'options') ?>"><?php echo the_field('phone-2', 'options') ?></a>
                    <a href="mailto:<?php echo the_field('e-mail', 'options') ?>"><?php echo the_field('e-mail', 'options') ?></a>
                </div>
                <div class="footer__adress footer__item">
                    <h3>Address</h3>
                    <?php echo the_field('adress', 'options') ?>
                </div>
            </div>
        </div>
        <div class="footer__copyright">
            <div class="footer__container main-container">
                <div class="copyright">
                    Copyright: Busy Bee Clean Limited
                </div>
                <div class="footer__social">
                    <a href="<?php echo the_field('facebook_account_link', 'options') ?>">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                                <path d="M11.0001 0.0458984C4.92496 0.0458984 0 4.97086 0 11.046C0 16.4946 3.96574 21.007 9.16547 21.8808V13.3409H6.51193V10.2677H9.16547V8.00165C9.16547 5.37239 10.7713 3.9396 13.1172 3.9396C14.2407 3.9396 15.2062 4.02331 15.4865 4.06019V6.80846L13.8595 6.80925C12.584 6.80925 12.3381 7.41523 12.3381 8.30477V10.2661H15.3815L14.9846 13.3393H12.3381V21.9543C17.7806 21.2919 22 16.6645 22 11.0428C22 4.97086 17.075 0.0458984 11.0001 0.0458984Z" fill="#040404"/>
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="22" height="22" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                </div>
                <div class="footer__desc">
                    Do Not Sell My Personal Information
                </div>
            </div>
        </div>
	</footer>
</div>
<script src="https://api-maps.yandex.ru/2.1/?apikey=002aea30-4c19-446a-8a25-9d7ff12d5a8a&lang=ru_RU"
        type="text/javascript" defer>
<?php wp_footer(); ?>







</body>
</html>
