<?php

get_header();
$post_id = get_the_ID();
?>
    <main class="service-item main-container">
        <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
        <section class="service-item__content">
            <div class="service-item__img">
                <img src="<?php the_field('image_for_service',$post_id);?>" alt="<?php the_title();?>">
                <div class="raiting">
                    <?php the_field('raiting',$post_id);?>
                    <img src="<?php the_field('raiting_image',$post_id);?>" alt="<?php the_title();?> <?php the_field('raiting',$post_id);?>">
                </div>
                <div class="reviews">
                    <?php the_field('reviews',$post_id);?>
                    <svg width="103" height="26" viewBox="0 0 103 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0)">
                            <path d="M27.0684 9.21497H37.4975V11.215H33.3968V22.458H31.1419V11.215H27.0593V9.21497H27.0684ZM37.052 12.8692H38.9796V14.7196H39.016C39.0796 14.458 39.1978 14.2056 39.3706 13.9626C39.5433 13.7196 39.7525 13.486 39.998 13.2897C40.2435 13.0841 40.5162 12.9252 40.8163 12.7944C41.1163 12.6729 41.4255 12.6075 41.7346 12.6075C41.971 12.6075 42.1438 12.6168 42.2347 12.6262C42.3257 12.6355 42.4166 12.6542 42.5166 12.6636V14.7009C42.3711 14.6729 42.2256 14.6542 42.0711 14.6355C41.9165 14.6168 41.771 14.6075 41.6255 14.6075C41.28 14.6075 40.9527 14.6823 40.6435 14.8224C40.3344 14.9626 40.0707 15.1776 39.8434 15.4486C39.6161 15.729 39.4342 16.0654 39.2978 16.4766C39.1615 16.8879 39.0978 17.3552 39.0978 17.8879V22.4486H37.0429V12.8692H37.052ZM51.9637 22.458H49.9452V21.1215H49.9088C49.6542 21.6075 49.2814 21.9907 48.7813 22.2804C48.2812 22.5701 47.7721 22.7196 47.2538 22.7196C46.0263 22.7196 45.1352 22.4112 44.5897 21.7851C44.0441 21.1589 43.7714 20.215 43.7714 18.9533V12.8692H45.8263V18.7477C45.8263 19.5888 45.9808 20.1869 46.2991 20.5327C46.6082 20.8785 47.0538 21.0561 47.6175 21.0561C48.0539 21.0561 48.4085 20.9907 48.6995 20.8505C48.9905 20.7103 49.2269 20.5327 49.3996 20.2991C49.5815 20.0748 49.7088 19.7944 49.7906 19.4766C49.8724 19.1589 49.9088 18.8131 49.9088 18.4393V12.8785H51.9637V22.458ZM55.4643 19.3832C55.528 20 55.7553 20.4299 56.1463 20.6823C56.5463 20.9252 57.0192 21.0561 57.5738 21.0561C57.7647 21.0561 57.983 21.0374 58.2285 21.0094C58.474 20.9813 58.7104 20.9159 58.9195 20.8318C59.1377 20.7477 59.3105 20.6168 59.456 20.4486C59.5923 20.2804 59.656 20.0654 59.6469 19.7944C59.6378 19.5234 59.5378 19.2991 59.3559 19.1309C59.1741 18.9533 58.9468 18.8224 58.6649 18.7103C58.383 18.6075 58.0648 18.514 57.7011 18.4393C57.3374 18.3645 56.9737 18.2804 56.6009 18.1963C56.219 18.1122 55.8462 18 55.4916 17.8785C55.137 17.757 54.8188 17.5888 54.5369 17.3738C54.255 17.1682 54.0277 16.8972 53.8641 16.5701C53.6913 16.243 53.6095 15.8411 53.6095 15.3552C53.6095 14.8318 53.7368 14.4019 53.9823 14.0467C54.2278 13.6916 54.546 13.4112 54.9188 13.1963C55.3007 12.9813 55.7189 12.8318 56.1826 12.7383C56.6464 12.6542 57.0919 12.6075 57.5102 12.6075C57.9921 12.6075 58.4558 12.6636 58.8922 12.7664C59.3287 12.8692 59.7287 13.0374 60.0833 13.2804C60.4379 13.514 60.7289 13.8224 60.9653 14.1963C61.2017 14.5701 61.3472 15.0281 61.4108 15.5608H59.265C59.165 15.0561 58.9468 14.7103 58.5922 14.5421C58.2376 14.3645 57.8284 14.2804 57.3738 14.2804C57.2283 14.2804 57.0555 14.2897 56.8555 14.3178C56.6555 14.3458 56.4736 14.3925 56.2918 14.458C56.119 14.5234 55.9735 14.6262 55.8462 14.757C55.728 14.8879 55.6644 15.0561 55.6644 15.271C55.6644 15.5327 55.7553 15.7383 55.9281 15.8972C56.1008 16.0561 56.3281 16.1869 56.61 16.2991C56.8919 16.4019 57.2101 16.4953 57.5738 16.5701C57.9375 16.6449 58.3103 16.729 58.6922 16.8131C59.065 16.8972 59.4287 17.0094 59.7924 17.1309C60.1561 17.2523 60.4743 17.4206 60.7562 17.6355C61.038 17.8505 61.2654 18.1122 61.4381 18.4299C61.6109 18.7477 61.7018 19.1495 61.7018 19.6168C61.7018 20.1869 61.5745 20.6636 61.3199 21.0654C61.0653 21.458 60.738 21.7851 60.3379 22.0281C59.9379 22.271 59.4832 22.458 58.9922 22.5701C58.5012 22.6823 58.0102 22.7383 57.5283 22.7383C56.9373 22.7383 56.3918 22.6729 55.8917 22.5327C55.3916 22.3925 54.9552 22.1869 54.5915 21.9159C54.2278 21.6355 53.9368 21.2897 53.7277 20.8785C53.5185 20.4673 53.4094 19.972 53.3912 19.4019H55.4643V19.3832ZM62.2473 12.8692H63.8022V9.99067H65.8571V12.8692H67.712V14.4486H65.8571V19.5701C65.8571 19.7944 65.8662 19.9813 65.8844 20.1495C65.9025 20.3084 65.948 20.4486 66.0117 20.5608C66.0753 20.6729 66.1753 20.757 66.3117 20.8131C66.4481 20.8692 66.6208 20.8972 66.8573 20.8972C67.0027 20.8972 67.1482 20.8972 67.2937 20.8879C67.4392 20.8785 67.5847 20.8598 67.7301 20.8224V22.458C67.5028 22.486 67.2755 22.5047 67.0664 22.5327C66.8482 22.5608 66.6299 22.5701 66.4026 22.5701C65.8571 22.5701 65.4206 22.514 65.0933 22.4112C64.766 22.3084 64.5023 22.1495 64.3204 21.9439C64.1295 21.7383 64.0113 21.486 63.9386 21.1776C63.8749 20.8692 63.8295 20.514 63.8204 20.1215V14.4673H62.2655V12.8692H62.2473ZM69.1668 12.8692H71.1125V14.1682H71.1489C71.4399 13.6075 71.8399 13.215 72.3582 12.972C72.8765 12.729 73.4311 12.6075 74.0403 12.6075C74.7768 12.6075 75.4133 12.7383 75.9589 13.0094C76.5044 13.271 76.959 13.6355 77.3227 14.1028C77.6864 14.5701 77.9501 15.1122 78.132 15.729C78.3138 16.3458 78.4047 17.0094 78.4047 17.7103C78.4047 18.3552 78.3229 18.9813 78.1592 19.5795C77.9956 20.1869 77.7501 20.7196 77.4228 21.1869C77.0954 21.6542 76.6772 22.0187 76.168 22.2991C75.6588 22.5795 75.0678 22.7196 74.3768 22.7196C74.0767 22.7196 73.7767 22.6916 73.4766 22.6355C73.1765 22.5795 72.8856 22.486 72.6128 22.3645C72.34 22.243 72.0764 22.0841 71.849 21.8879C71.6126 21.6916 71.4217 21.4673 71.258 21.215H71.2217V26H69.1668V12.8692ZM76.3498 17.6729C76.3498 17.243 76.2953 16.8224 76.1862 16.4112C76.0771 16 75.9134 15.6449 75.6952 15.3271C75.477 15.0094 75.2042 14.757 74.8859 14.5701C74.5586 14.3832 74.1858 14.2804 73.7676 14.2804C72.9038 14.2804 72.2491 14.5888 71.8127 15.2056C71.3762 15.8224 71.158 16.6449 71.158 17.6729C71.158 18.1589 71.2126 18.6075 71.3308 19.0187C71.449 19.4299 71.6126 19.7851 71.849 20.0841C72.0764 20.3832 72.3491 20.6168 72.6674 20.7851C72.9856 20.9626 73.3584 21.0467 73.7767 21.0467C74.2495 21.0467 74.6404 20.9439 74.9678 20.7477C75.2951 20.5514 75.5588 20.2897 75.7679 19.9813C75.977 19.6636 76.1316 19.3084 76.2225 18.9066C76.3044 18.5047 76.3498 18.0935 76.3498 17.6729ZM79.9777 9.21497H82.0327V11.215H79.9777V9.21497ZM79.9777 12.8692H82.0327V22.458H79.9777V12.8692ZM83.8694 9.21497H85.9243V22.458H83.8694V9.21497ZM92.2254 22.7196C91.4798 22.7196 90.816 22.5888 90.2341 22.3365C89.6522 22.0841 89.1612 21.729 88.752 21.2897C88.352 20.8411 88.0428 20.3084 87.8337 19.6916C87.6246 19.0748 87.5154 18.3925 87.5154 17.6542C87.5154 16.9252 87.6246 16.2523 87.8337 15.6355C88.0428 15.0187 88.352 14.486 88.752 14.0374C89.1521 13.5888 89.6522 13.243 90.2341 12.9907C90.816 12.7383 91.4798 12.6075 92.2254 12.6075C92.9709 12.6075 93.6347 12.7383 94.2166 12.9907C94.7985 13.243 95.2895 13.5981 95.6987 14.0374C96.0988 14.486 96.4079 15.0187 96.6171 15.6355C96.8262 16.2523 96.9353 16.9252 96.9353 17.6542C96.9353 18.3925 96.8262 19.0748 96.6171 19.6916C96.4079 20.3084 96.0988 20.8411 95.6987 21.2897C95.2986 21.7383 94.7985 22.0841 94.2166 22.3365C93.6347 22.5888 92.9709 22.7196 92.2254 22.7196ZM92.2254 21.0467C92.68 21.0467 93.0801 20.9439 93.4165 20.7477C93.7529 20.5514 94.0257 20.2897 94.2439 19.972C94.4621 19.6542 94.6167 19.2897 94.7258 18.8879C94.8258 18.486 94.8804 18.0748 94.8804 17.6542C94.8804 17.243 94.8258 16.8411 94.7258 16.4299C94.6258 16.0187 94.4621 15.6636 94.2439 15.3458C94.0257 15.0281 93.7529 14.7757 93.4165 14.5795C93.0801 14.3832 92.68 14.2804 92.2254 14.2804C91.7707 14.2804 91.3707 14.3832 91.0342 14.5795C90.6978 14.7757 90.425 15.0374 90.2068 15.3458C89.9886 15.6636 89.834 16.0187 89.7249 16.4299C89.6249 16.8411 89.5704 17.243 89.5704 17.6542C89.5704 18.0748 89.6249 18.486 89.7249 18.8879C89.8249 19.2897 89.9886 19.6542 90.2068 19.972C90.425 20.2897 90.6978 20.5514 91.0342 20.7477C91.3707 20.9533 91.7707 21.0467 92.2254 21.0467ZM97.5354 12.8692H99.0902V9.99067H101.145V12.8692H103V14.4486H101.145V19.5701C101.145 19.7944 101.154 19.9813 101.172 20.1495C101.191 20.3084 101.236 20.4486 101.3 20.5608C101.363 20.6729 101.463 20.757 101.6 20.8131C101.736 20.8692 101.909 20.8972 102.145 20.8972C102.291 20.8972 102.436 20.8972 102.582 20.8879C102.727 20.8785 102.873 20.8598 103.018 20.8224V22.458C102.791 22.486 102.564 22.5047 102.354 22.5327C102.136 22.5608 101.918 22.5701 101.691 22.5701C101.145 22.5701 100.709 22.514 100.381 22.4112C100.054 22.3084 99.7903 22.1495 99.6085 21.9439C99.4175 21.7383 99.2993 21.486 99.2266 21.1776C99.163 20.8692 99.1175 20.514 99.1084 20.1215V14.4673H97.5536V12.8692H97.5354Z" fill="black"/>
                            <path d="M24.668 9.21495H15.2481L12.3385 0L9.41984 9.21495L0 9.20561L7.62862 14.9065L4.70992 24.1121L12.3385 18.4206L19.9581 24.1121L17.0485 14.9065L24.668 9.21495Z" fill="#00B67A"/>
                            <path d="M17.7031 16.9906L17.0484 14.9065L12.3385 18.4205L17.7031 16.9906Z" fill="#005128"/>
                        </g>
                        <defs>
                            <clipPath id="clip0">
                                <rect width="103" height="26" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <a href="<?php the_field('check_price_link',$post_id);?>" class="check-price main-button service-item__lnk">
                    <?php the_field('check_price_label',$post_id);?>
                </a>
            </div>
            <div class="service-item__desc">
                <div class="service-item__header">
                    <h1 class="service-item__title">
                        <?php the_title();?>
                    </h1>
                    <span class="price service-item__title">
                        <?php the_field('service_price',$post_id);?>
                    </span>
                </div>
                <div class="service-item__main">
                    <?php the_content();?>
                </div>
            </div>
        </section>
    </main>
<?php

get_footer();
