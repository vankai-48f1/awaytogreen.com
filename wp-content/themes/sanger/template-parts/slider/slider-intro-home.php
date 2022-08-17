<?php if (have_rows('slider_home')) : ?>
    <div class="slider-primary arrow-style-primary">
        <?php while (have_rows('slider_home')) : the_row();
            $image = get_sub_field('image');
            $link = get_sub_field('link');
            $title_above = get_sub_field('title_above');
            $title_below = get_sub_field('title_below');
        ?>
            <div class="slider-primary__item">
                <a href="<?php echo $link ? $link : "#"; ?>" class="slider-primary__link">
                    <div class="slider-primary__image-wrap">
                        <div class="slider-primary__image">
                            <?php if ($image) { ?>
                                <img src="<?php echo $image['url']; ?>" class="img-absolute-option" alt="slide image" width="100%" />
                            <?php } ?>
                        </div>
                    </div>
                    <!-- Content -->
                    <div class="slider-primary__content">
                        <div class="slider-primary__title">
                            <div class="slider-primary__title-above"><?php echo $title_above; ?></div>
                            <div class="slider-primary__title-below"><?php echo $title_below; ?></div>
                        </div>
                    </div>
                </a>
                <!-- Social -->
                <div class="slider-primary__social-wrap">
                    <div class="slider-primary__social">
                        <?php get_template_part('template-parts/content', 'social') ?>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>