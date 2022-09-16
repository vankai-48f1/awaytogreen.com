<?php

/**
 * Template Name: About Us
 */
get_header();
?>
<?php if (have_posts()) : ?>
    <div class="page-about">
        <?php while (have_posts()) : the_post(); ?>
            <!-- Header -->
            <?php get_template_part('template-parts/header/header', 'page'); ?>
            <div class="container">
                <div class="breadcrumb">
                    <!-- Breadcrumb -->
                </div>
            </div>
            <!-- Content -->
            <div class="about-body">
                <div class="container">
                    <!-- Top -->
                    <?php $about_top = get_field('top_about'); ?>
                    <div class="about-body__top">
                        <div class="row">
                            <div class="col-lg-6 col-12 mb-4">
                                <div class="about-boby__top-content about-boby__top-content--left">
                                    <h3 class="font-secondary-medium-01 color-dark-01 mb-2"><?php echo $about_top['subtitle'] ?></h3>
                                    <h2 class="font-secondary-medium-02 color-dark-01 mb-4"><?php echo $about_top['title'] ?></h2>
                                    <div class="about-boby__top-image-left">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-3 col-12"></div>
                                            <div class="col-xl-8 col-lg-9 col-12">
                                                <?php if ($about_top['image_1']) : ?>
                                                    <img src="<?php echo $about_top['image_1'] ?>" alt="">
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 mb-4">
                                <div class="about-boby__top-content">
                                    <div class="row">
                                        <div class="col-xl-2 col-lg-1 col-0"></div>
                                        <div class="col-xl-10 col-lg-11 col-12">
                                            <div class="about-boby__top-content-right">
                                                <div class="about-boby__top-image-right mb-3">
                                                    <?php if ($about_top['image_2']) : ?>
                                                        <img src="<?php echo $about_top['image_2'] ?>" alt="">
                                                    <?php endif; ?>
                                                </div>
                                                <div class="about-body__desc font-primary-light-02"><?php echo $about_top['description'] ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Member -->
                <div class="about-member" style="background: no-repeat center/cover url(<?php echo get_field('member_background') ?>)">
                    <div class="container">
                        <div class="about-member__wapper">
                            <?php
                            if (have_rows('member')) : ?>
                                <div class="about-member__list">
                                    <?php while (have_rows('member')) : the_row(); ?>
                                        <div class="about-member__item">
                                            <div class="about-member__item-inner">
                                                <div class="about-member__icon mb-5"><span class="about-member__icon-quote"></span></div>
                                                <div class="about-member__content mb-4 font-secondary-light-05"><?php echo get_sub_field('description') ?></div>
                                                <div class="about-member__info mb-4">
                                                    <div class="about-member__name font-secondary-medium-04 mb-2"><?php echo get_sub_field('name') ?></div>
                                                    <div class="about-member__position font-primary-light-03 color-light-01"><?php echo get_sub_field('position') ?></div>
                                                </div>
                                                <input type="hidden" name="member_avatar" value="<?php echo get_sub_field('avatar') ?>">
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                                <div class="about-member__dots"></div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <!-- Client and Partner -->
                <div class="hm-section-1">
                    <div class="container">
                        <?php $client_partner = get_field('client_partner'); ?>
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <h3 class="font-secondary-medium-01 color-dark-01 mb-3"><?php echo $client_partner['subtitle'] ?></h3>
                            </div>
                            <div class="col-md-6 col-12"></div>
                            <div class="col-md-6 col-12">
                                <div class="hm-section-1__hd">
                                    <h2 class="font-secondary-medium-02 color-dark-01 mb-4"><?php echo $client_partner['title'] ?></h2>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="hm-section-1__content">
                                    <div class="hm-section-1__main-content font-primary-light-02 mb-3">
                                        <?php echo $client_partner['content'] ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Partner -->
                        <div class="about-partner">
                            <?php
                            if (have_rows('client_partner')) : while (have_rows('client_partner')) : the_row();
                                    if (have_rows('partner')) : ?>
                                        <div class="about-partner__list">
                                            <?php while (have_rows('partner')) : the_row(); ?>
                                                <div class="about-partner__item">
                                                    <div class="about-partner__item-inner">
                                                        <a href="<?php echo get_sub_field('link') ? get_sub_field('link') : '#'; ?>" class="about-partner__link">
                                                            <div class="about-partner__logo">
                                                                <?php echo get_sub_field('logo') ? '<img src="' . get_sub_field('logo') . '" />' : ''; ?>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            <?php endwhile; ?>
                                        </div>
                            <?php endif;
                                endwhile;
                            endif; ?>
                        </div>
                    </div>
                </div>

                <!-- Teams -->
                <div class="about-team">
                    <div class="container">
                        <?php
                        if (have_rows('teams')) : ?>
                            <div class="about-team__list about-team__list--slider">
                                <?php while (have_rows('teams')) : the_row(); ?>
                                    <?php
                                    $name = get_sub_field('name');
                                    $position = get_sub_field('position');
                                    $avatar = get_sub_field('avatar');
                                    ?>
                                    <div class="about-team__item">
                                        <div class="about-team__item-inner">
                                            <div class="about-team__avatar-wrap mb-3">
                                                <div class="about-team__avatar">
                                                    <?php if ($avatar) : ?>
                                                        <img src="<?php echo $avatar ?>" class="img-absolute-option" alt="">
                                                    <?php endif; ?>
                                                </div>
                                                <!-- Social -->
                                                <?php if (have_rows('social')) : $i = 0;?>
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
                                                        <?php $i++; endwhile; ?>
                                                    </ul>
                                                <?php endif; ?>
                                            </div>

                                            <div class="about-team__info">
                                                <div class="about-team__name font-secondary-medium-03 color-dark-01 mb-1"><?php echo $name ?></div>
                                                <div class="about-team__position font-primary-light-04 color-light-03"><?php echo $position ?></div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>
<?php get_footer(); ?>