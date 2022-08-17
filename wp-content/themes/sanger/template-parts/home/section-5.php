<div class="hm-section-5">
    <div class="container">
        <div class="hm-section-5__wrapper">
            <div class="hm-section-5__body" style="background-image: url(<?php echo get_field('background_newsletter'); ?>)">
                <div class="hm-section-5__form">
                    <?php echo do_shortcode(get_field('newsletter')); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="hm-section-5__list-image-wrap">
    <div class="hm-section-5__btn-instagram-wrap">
        <a href="<?php echo get_field('link_instagram') ? get_field('link_instagram') : '#'; ?>" class="hm-section-5__btn-instagram"></a>
    </div>
    <div class="hm-section-5__list-image">
        <?php
        if (have_rows('list_image_instagram')) : while (have_rows('list_image_instagram')) : the_row();
                $image = get_sub_field('image');
        ?>
                <div class="hm-section-5__image-item">
                    <div class="hm-section-5__img-ins">
                        <?php if ($image) : ?>
                            <img src="<?php echo $image ?>" alt="" class="img-absolute-option">
                        <?php endif; ?>
                    </div>
                </div>
        <?php
            endwhile;
        endif;
        ?>
    </div>
</div>