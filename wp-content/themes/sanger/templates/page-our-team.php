<?php

/**
 * Template Name: Our team
 */
get_header();
?>
<?php if (have_posts()) : ?>
    <div class="page-our-team">
        <?php while (have_posts()) : the_post(); ?>
            <!-- Header -->
            <div class="page-our-team__header">
                <?php get_template_part('template-parts/header/header', 'page'); ?>
            </div>

            <!-- content -->
            <div class="page-our-team__main">
                <!-- Teams -->
                <div class="container">
                    <div class="about-team">
                        <div class="container">
                            <?php
                            if (have_rows('teams')) : ?>
                                <div class="about-team__list row">
                                    <?php while (have_rows('teams')) : the_row(); ?>
                                        <?php
                                        $name = get_sub_field('name');
                                        $position = get_sub_field('position');
                                        $avatar = get_sub_field('avatar');
                                        ?>
                                        <div class="col-lg-4 col-md-6 col-12 mb-5">
                                            <div class="about-team__item">
                                                <div class="about-team__item-inner">
                                                    <div class="about-team__avatar-wrap mb-3">
                                                        <div class="about-team__avatar">
                                                            <?php if ($avatar) : ?>
                                                                <img src="<?php echo $avatar ?>" class="img-absolute-option" alt="">
                                                            <?php endif; ?>
                                                        </div>
                                                        <!-- Social -->
                                                        <?php if (have_rows('social')) : $i = 0; ?>
                                                            <ul class="about-team__social social">
                                                                <?php while (have_rows('social')) : the_row();
                                                                    $icon = get_sub_field('icon');
                                                                    $link = get_sub_field('link');
                                                                ?>
                                                                    <?php if ($icon) : ?>
                                                                        <li class="social__item">
                                                                            <a href="<?php echo $link ? $link : "#"; ?>" style="transition-delay: <?php echo $i * 0.05 ?>s;">
                                                                                <i class="<?php echo $icon ?>"></i>
                                                                            </a>
                                                                        </li>
                                                                    <?php endif; ?>
                                                                <?php $i++;
                                                                endwhile; ?>
                                                            </ul>
                                                        <?php endif; ?>
                                                    </div>

                                                    <div class="about-team__info">
                                                        <div class="about-team__name font-secondary-medium-03 color-dark-01 mb-1"><?php echo $name ?></div>
                                                        <div class="about-team__position font-primary-light-04 color-light-03"><?php echo $position ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- See more -->
            <div class="page-our-team__see-more mtext-center">
                <h3 class="font-secondary-medium-01 color-dark-01 mb-3"><?php echo get_field('see_more')['subtitle'] ?></h3>
                <h2 class="font-secondary-medium-02 color-dark-01 mb-5"><?php echo get_field('see_more')['title'] ?></h2>
                <a href="<?php echo get_field('see_more')['link'] ?>" class="button-type-02"></a>
            </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>
<?php get_footer(); ?>