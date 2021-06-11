<?php
/**
 * Template Name: Main page
 *
 */

get_header();
?>
    <main id="home-page" class="home-page">
        <section class="section-banner">
            <div class="section-banner__img">
                <img src="<?php echo the_field('banner_image', 10) ?>"
                     alt="<?php echo the_field('banner_title', 10) ?>">
            </div>
            <div class="section-banner__content main-container">
                <h1 class="section-banner__title"><?php echo the_field('banner_title', 10) ?></h1>
                <p class="section-banner__desc"><?php echo the_field('bunner_subtitle', 10) ?></p>
                <a class="section-banner__lnk main-button"
                   href="<?php echo the_field('button_link', 10) ?>"><?php echo the_field('button_name', 10) ?></a>
            </div>
        </section>
        <div class="covid-section">
            <div class="covid-section__container main-container">
                <img class="covid-section__img" src="<?php echo the_field('covid_icon', 10) ?>"
                     alt="<?php echo the_field('covid_text', 10) ?>">
                <p class="covid-section__desc"><?php echo the_field('covid_text', 10) ?></p>
            </div>
        </div>
        <section class="cleaning-slider">
            <div class="cleaning-slider__container main-container">
                <div class="cleaning-slider__navigate">
                    <div class="cleaning-slider__prev">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M40 20.0001C40 31.0458 31.0457 40.0001 20 40.0001C8.9543 40.0001 0 31.0458 0 20.0001C0 8.95443 8.9543 0.00012207 20 0.00012207C31.0457 0.00012207 40 8.95443 40 20.0001Z"
                                  fill="#FFE726"/>
                            <path d="M22.74 29.6614C23.2288 30.1539 24.02 30.1539 24.5075 29.6614C24.9963 29.1676 24.9963 28.3689 24.5075 27.8752L16.7638 20.019L24.5088 12.1628C24.9976 11.6703 24.9976 10.8703 24.5088 10.3766C24.02 9.88405 23.2288 9.88405 22.7413 10.3766L14.1163 19.1253C13.6412 19.6066 13.64 20.4303 14.1163 20.9115L22.74 29.6614Z"
                                  fill="white"/>
                        </svg>
                    </div>
                    <div class="cleaning-slider__next">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="20" cy="20.0001" r="20" fill="#FFE726"/>
                            <path d="M17.26 10.3389C16.7712 9.84636 15.98 9.84636 15.4925 10.3389C15.0037 10.8326 15.0037 11.6313 15.4925 12.1251L23.2362 19.9813L15.4912 27.8375C15.0024 28.33 15.0024 29.1299 15.4912 29.6237C15.98 30.1162 16.7712 30.1162 17.2587 29.6237L25.8837 20.875C26.3588 20.3937 26.36 19.5699 25.8837 19.0887L17.26 10.3389Z"
                                  fill="white"/>
                        </svg>
                    </div>
                </div>
                <div class="cleaning-slider__items swiper-container">
                    <div class="cleaning-slider__wrapper swiper-wrapper">
                        <?php
                        if (have_rows('cleaning_slider_items', 10)):
                            while (have_rows('cleaning_slider_items', 10)) : the_row();
                                $sub_image = get_sub_field('item_image');
                                $sub_title = get_sub_field('item_title');
                                $sub_price = get_sub_field('starting_price');
                                ?>
                                <div class="cleaning-slider__item swiper-slide">
                                    <div class="cleaning-slider__bg">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/bg-r-t.png"
                                             alt="<?php echo $sub_title; ?>">
                                    </div>
                                    <div class="cleaning-slider__img">
                                        <img src="<?php echo $sub_image; ?>" alt="<?php echo $sub_title; ?>">
                                    </div>
                                    <div class="cleaning-slider__content">
                                        <h2 class="cleaning-slider__title">
                                            <?php echo $sub_title; ?>
                                        </h2>
                                        <div class="cleaning-slider__price">
                                            <span class="desc">starting from</span>
                                            <span class="price"><?php echo $sub_price; ?></span>
                                        </div>
                                    </div>
                                </div>

                            <?php
                            endwhile;
                        else :
                        endif;
                        ?>
                    </div>
                </div>
            </div>
            <div class="cleaning-slider__stages main-container">
                <?php
                if (have_rows('cleaning_stages', 10)):
                    while (have_rows('cleaning_stages', 10)) : the_row();
                        $sub_image = get_sub_field('cleaning_stage_image');
                        $sub_title = get_sub_field('cleaning_stage_title');
                        ?>
                        <div class="cleaning-slider__stage">
                            <div class="cleaning-slider__stage-bg">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/bg-l-b.png"
                                     alt="<?php echo $sub_title; ?>">
                            </div>
                            <div class="cleaning-slider__stage-desc">
                                <?php echo $sub_title; ?>
                            </div>
                            <div class="cleaning-slider__stage-img">
                                <img src="<?php echo $sub_image; ?>" alt="<?php echo $sub_title; ?>">
                            </div>
                        </div>
                    <?php
                    endwhile;
                else :
                endif;
                ?>
            </div>
        </section>
        <section class="check-prices">
            <div class="check-prices__bg">
                <img src="<?php echo the_field('check_prices_background', 10) ?>"
                     alt="<?php echo the_field('check_prices_title', 10) ?>">
            </div>
            <div class="check-prices__container main-container">
                <div class="check-prices__content">
                    <h2 class="check-prices__title">
                        <?php echo the_field('check_prices_title', 10) ?>
                    </h2>
                    <div class="check-prices__desc">
                        <?php echo the_field('check_prices_content', 10) ?>
                    </div>
                    <h3 class="check-prices__elsetitle">We are certified by:</h3>
                    <div class="check-prices__icons">
                        <?php
                        if (have_rows('check_prices_certified_icons', 10)):
                            while (have_rows('check_prices_certified_icons', 10)) : the_row();
                                $sub_image = get_sub_field('check_prices_sertificate_icon');
                                ?>
                                <img class="check-prices__icon" src="<?php echo $sub_image; ?>">
                            <?php
                            endwhile;
                        else :
                        endif;
                        ?>
                    </div>
                    <a class="main-button check-prices__lnk"
                       href="<?php echo the_field('check_prices_button_link', 10) ?>"><?php echo the_field('check_prices_button_name', 10) ?></a>
                </div>
            </div>
        </section>
        <div class="contact-us main-container">
            <div class="contact-us__wrapper">
                <div class="contact-us__img">
                    <img class="contact-us__bg" src="<?php echo get_template_directory_uri(); ?>/img/bg-big.png"
                         alt="<?php echo $sub_title; ?>">
                </div>
                <div class="contact-us__serv">
                    <div class="contact-us__serv-cont">
                        <?php echo the_field('check_our_services_description', 10) ?>
                    </div>
                    <a href="<?php echo the_field('check_our_services_btn_link', 10) ?>"
                       class="contact-us__serv-lnk main-button"><?php echo the_field('check_our_services_btn_name', 10) ?></a>
                </div>
                <div class="contact-us__cont">
                    <div class="contact-us__serv-cont">
                        <?php echo the_field('contact_us_description', 10) ?>
                    </div>
                    <a href="<?php echo the_field('contact_us_btn_link', 10) ?>"
                       class="contact-us__lnk main-button"><?php echo the_field('contact_us_btn_name', 10) ?></a>
                    <span>With no extra fees</span>
                </div>
            </div>
        </div>
        <section class="google">
            <div class="google__container main-container">
                <div class="google__wrapper">
                    <div class="google__logo">
                        <img class="contact-us__bg" src="<?php echo the_field('contact_us_logo_image', 10) ?>">
                    </div>
                    <div class="google__img">
                        <img class="contact-us__bg" src="<?php echo the_field('contact_us_app_image', 10) ?>">
                    </div>
                    <div class="google__desc">
                        <h2 class="google__title">
                            <?php echo the_field('contact_us_title', 10) ?>
                        </h2>
                        <div class="google__desc">
                            <?php echo the_field('contact_us_description', 10) ?>
                        </div>
                        <div class="google__email">
                            <?php echo the_field('e-mail', 'options') ?>
                        </div>
                        <div class="google__phone">
                            <?php echo the_field('phone', 'options') ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="questions">
            <div class="questions__img">
                <img class="contact-us__bg" src="<?php echo the_field('questions_image', 10) ?>" alt=" <?php echo the_field('questions_title', 10) ?>">
            </div>
            <div class="questions__container main-container">
                <h2 class="questions__title">
                    <?php echo the_field('questions_title', 10) ?>
                </h2>
                <div class="questions__items">
                    <?php
                    if (have_rows('questions_items', 10)):
                        while (have_rows('questions_items', 10)) : the_row();
                            $sub_title = get_sub_field('questions_item_title');
                            $sub_desc = get_sub_field('questions_item_desc');
                            ?>
                            <div class="questions__item">
                                <h3 class="questions__subtitle">
                                    <?php echo $sub_title; ?>
                                </h3>
                                <div class="questions__desc">
                                    <?php echo $sub_desc; ?>
                                </div>
                            </div>
                        <?php
                        endwhile;
                    else :
                    endif;
                    ?>
                </div>
            </div>
        </section>
        <?php get_template_part('inc/to-book'); ?>
    </main>
<?php

get_footer();
