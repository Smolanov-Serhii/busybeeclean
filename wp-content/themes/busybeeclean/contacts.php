<?php
/**
 * Template Name: Contacts
 *
 */
$post_id = get_the_ID();
get_header();
?>
    <main id="contacts-page" class="contacts-page">
        <section class="contacts-page__section main-container">
            <div class="contacts-page__map" data-icon="<?php echo the_field('map_marker_image', 'options')?>" data-coord1="<?php echo the_field('map_coordinate_1', 'options')?>" data-coord2="<?php echo the_field('map_coordinate_2', 'options')?>">
                <div class="map" id="map">

                </div>
                <div class="adress">
                    <?php echo the_field('map_description', 'options')?>
                </div>
            </div>
            <div class="contacts-page__text">
                <?php echo the_field('text_under_map', $post_id)?>
            </div>
        </section>
    </main>
<?php

get_footer();
