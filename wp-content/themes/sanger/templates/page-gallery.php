<?php

/**
 * Template Name: Gallery
 */
get_header() ?>
<!-- Page Content -->
<div class="page-gallery">
    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>
            <!-- Header -->
            <div class="mb-5">
                <?php get_template_part('template-parts/header/header', 'page'); ?>
            </div>

            <div class="container">

                <div class="row">

                    <!-- Blog Entries Column -->
                    <div class="col-xl-8 col-lg-9 col-12">
                        <div class="page-gallery__body">
                            <?php
                            $images = get_field('gallery');
                            if ($images) : ?>
                                <ul class="slider-secondary slider-secondary--gallery">
                                    <?php foreach ($images as $image) : ?>
                                        <li class="slider-secondary__item">
                                            <div class="slider-secondary__item-image">
                                                <img src="<?php echo esc_url($image['sizes']['post-large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="cb-img" />
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                            <div class="page-gallery__main-content font-primary-light-02">
                                <?php the_content() ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-3 col-12">
                        <?php
                        if (have_rows('sidebar_gallery')) : ?>
                            <div class="page-gallery__sidebar">
                                <?php while (have_rows('sidebar_gallery')) : the_row(); ?>
                                    <div class="page-gallery__main-content font-primary-light-02"><?php echo get_sub_field('content') ?></div>

                                    <div class="page-gallery__info">
                                        <?php if (get_sub_field('client')) : ?>
                                            <div class="row mb-2">
                                                <div class="col-4"><span class="page-gallery__info-label">Client</span></div>
                                                <div class="col-8"><span class="page-gallery__info-value"><?php echo get_sub_field('client') ?></span></div>
                                            </div>
                                        <?php endif; ?>

                                        <?php if (get_sub_field('date')) : ?>
                                            <div class="row mb-2">
                                                <div class="col-4"><span class="page-gallery__info-label">Date</span></div>
                                                <div class="col-8"><span class="page-gallery__info-value"><?php echo get_sub_field('date') ?></span></div>
                                            </div>
                                        <?php endif; ?>

                                        <?php if (get_sub_field('author')) : ?>
                                            <div class="row mb-2">
                                                <div class="col-4"><span class="page-gallery__info-label">Author</span></div>
                                                <div class="col-8"><span class="page-gallery__info-value"><?php echo get_sub_field('author') ?></span></div>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </div>

                </div>
                <!-- /.row -->

            </div>
        <?php endwhile; ?>

    <?php endif; ?>
</div>
<!-- /.container -->
<?php get_footer() ?>