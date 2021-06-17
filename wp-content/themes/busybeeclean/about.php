<?php
/**
 * Template Name: About
 *
 */
$post_id = get_the_ID();
get_header();
?>
    <main id="about-page" class="about-page">
        <section class="about-page__section main-container">
            <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
            <div class="about-page__content">
                <div class="about-page__first">
                    <?php
                    $image = get_field('image_for_section',$post_id);
                    if( !empty( $image ) ): ?>
                        <img class="about-page__first-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                    <div class="about-page__first-desc">
                        <?php echo the_field('content_for_section', $post_id);?>
                    </div>
                </div>
                <div class="about-page__second">
                    <div class="about-page__second-desc">
                        <?php echo the_field('content_for_sectio_2', $post_id);?>
                    </div>
                    <?php
                    $image = get_field('image_for_section_2',$post_id);
                    if( !empty( $image ) ): ?>
                        <img class="about-page__second-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                </div>
                <div class="about-page__third">
                    <div class="about-page__third-desc">
                        <?php echo the_field('left_content', $post_id);?>
                    </div>
                    <div class="about-page__third-desc">
                        <?php echo the_field('right_content', $post_id);?>
                    </div>
                </div>
            </div>
            <div class="about-page__reviews">
                <?php
                if( have_rows('reviews_list',$post_id) ):
                    while( have_rows('reviews_list',$post_id) ) : the_row();
                        $image = get_sub_field('reviews_item_image');
                        $name = get_sub_field('reviews_item_name');
                        $work = get_sub_field('reviews_item_company');
                        $desc = get_sub_field('reviews_item_description');
                        ?>
                        <div class="about-page__reviews-item">
                            <div class="photo">
                                <img src="<?php echo $image;?>">
                            </div>
                            <div class="person">
                                <div class="name">
                                    <?php echo $name;?>
                                </div>
                                <div class="work">
                                    <?php echo $work;?>
                                </div>
                            </div>
                            <div class="description">
                                <p><?php echo $desc;?></p>
                            </div>
                            <div class="clip">
                                <svg width="51" height="40" viewBox="0 0 51 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0)">
                                        <path d="M31.059 39.9752L29.1465 36.6999C28.9425 36.3526 28.713 35.9804 28.458 35.5834C29.4525 35.0127 30.4215 34.4172 31.3905 33.8713C34.629 32.06 37.5615 29.8517 39.9075 26.9734C42.177 24.1944 43.2225 20.9936 43.554 17.4206C42.432 17.4206 41.361 17.5199 40.29 17.3958C38.556 17.2221 36.7455 17.1229 35.1135 16.577C31.773 15.4852 30.141 13.0288 29.835 9.6543C29.682 7.81817 29.9625 6.0813 30.906 4.46849C32.895 1.09399 36.1335 -0.419576 40.4175 0.1263C45.9765 0.771427 48.96 3.47599 50.286 9.13324C50.592 10.4483 50.7705 11.7882 51 13.1032L51 16.9244C50.949 17.0732 50.8725 17.2221 50.847 17.3958C50.592 19.8771 49.827 22.1846 48.603 24.3681C45.7725 29.4299 41.718 33.3751 36.7965 36.5014C34.9605 37.6676 33.099 38.8338 31.2375 40C31.1865 39.9752 31.1355 39.9752 31.059 39.9752Z" fill="#FFE407"/>
                                        <path d="M2.70407 39.9751C1.81157 38.536 0.944571 37.0968 0.00107232 35.5585C0.434571 35.3103 0.868073 35.0374 1.30157 34.8141C4.71857 32.8787 8.00807 30.8193 10.6856 27.8914C13.4141 24.9139 14.7401 21.4401 15.1226 17.3957C14.7656 17.3957 14.4086 17.4205 14.0516 17.3957C11.9351 17.2468 9.76757 17.3461 7.72757 16.8746C2.90807 15.7829 1.07207 12.1851 1.40357 7.79326C1.73507 3.59995 5.30507 0.225447 9.53807 0.0269459C12.6491 -0.121926 15.6326 0.299884 18.0806 2.38414C20.2991 4.26989 21.2936 6.82558 21.9311 9.53014C23.7671 17.5198 21.3956 24.3432 15.8366 30.2734C13.0316 33.2509 9.76757 35.6825 6.24857 37.7916C5.10107 38.4863 4.00457 39.2307 2.85707 39.9751L2.70407 39.9751Z" fill="#FFE407"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0">
                                            <rect width="51" height="40" fill="white" transform="translate(51 40) rotate(-180)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                    <?php endwhile;
                else :
                endif;?>

            </div>
        </section>
    </main>
<?php

get_footer();
