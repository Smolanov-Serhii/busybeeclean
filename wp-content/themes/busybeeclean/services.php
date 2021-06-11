<?php
/**
 * Template Name: Services
 *
 */

get_header();
?>
    <main id="service-page" class="service-page">
        <section class="service-page__section main-container">
            <h1 class="service-page__title">
                <?php the_title();?>
            </h1>
            <div class="service-page__content">
                <?php
                $args = array(
                    'post_type' => 'services',
                    'showposts' => "-1", //сколько показать статей
                    'orderby' => "menu_order", //сортировка по дате
                    'caller_get_posts' => 1);
                $my_query = new wp_query($args);
                if ($my_query->have_posts()) {
                    while ($my_query->have_posts()) {
                        $my_query->the_post();
                        $post_id = get_the_ID();
                        $image = get_field('image_for_service', $post_id);
                        $price = get_field('service_price', $post_id);
                        ?>
                        <a href="<?php the_permalink();?>" class="service-page__item">
                            <div class="service-page__image">
                                <img src="<?php echo $image?>" alt="<?php the_title();?>">
                                <span class="hover">Quick View</span>
                            </div>
                            <div class="service-page__desc">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/bg-l-b.png"
                                     alt="<?php the_title();?>">
                                <div class="service-page__price">
                                    <?php echo $price?>
                                </div>
                                <div class="service-page__about">
                                    <?php the_title();?>
                                </div>
                            </div>
                        </a>
                    <?php }
                }
                wp_reset_query(); ?>
            </div>
        </section>
        <?php get_template_part('inc/to-book'); ?>
    </main>
<?php

get_footer();
