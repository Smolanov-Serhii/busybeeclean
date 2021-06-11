<section class="book">
    <div class="book__container main-container">
        <h2 class="book__title">
            <?php echo the_field('to_book_title', 10) ?>
        </h2>
        <div class="book__tabs">
            <?php
            if (have_rows('to_book_items', 10)):
                while (have_rows('to_book_items', 10)) : the_row();
                    $sub_title = get_sub_field('to_book_link_title');
                    $sub_lnk = get_sub_field('to_book_link');
                    ?>
                    <a href="<?php echo $sub_lnk; ?>" class="book__tab main-button"> <?php echo $sub_title; ?></a>
                <?php
                endwhile;
            else :
            endif;
            ?>
        </div>
    </div>
</section>