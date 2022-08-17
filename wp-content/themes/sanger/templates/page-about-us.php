<?php

/**
 * Template Name Sample: About Us
 */
get_header();
?>
<?php if (have_posts()) : ?>
    <div class="page-about">
        <?php while (have_posts()) : the_post(); ?>
            <div class="container">
                <div class="breadcrumb">
                    <!-- Breadcrumb -->
                </div>

                <div class="about-intro mb-4">
                    <!-- Intro -->
                </div>

                <!-- Content -->
                <div class="about-body">
                    <div class="about-body__main">
                        <?php the_content() ?>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>
<?php get_footer(); ?>