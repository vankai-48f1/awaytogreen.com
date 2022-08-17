<?php
/*
Template Name: Home
*/
?>
<?php get_header() ?>

<?php if (have_posts()) : ?>
    <main class="hm-page">
        <?php while (have_posts()) : the_post(); ?>
            <!-- Intro -->
            <div class="hm-intro">
                <!-- slider -->
                <?php get_template_part('template-parts/slider/slider', 'intro-home'); ?>
                <div class="hm-intro__polygon">
                    <div class="hm-intro__polygon-white"></div>
                    <div class="hm-intro__polygon-green-light"></div>
                    <div class="hm-intro__polygon-green-dark"></div>
                </div>
            </div>

            <!-- Section 1 -->
            <?php get_template_part('template-parts/home/section', '1'); ?>

            <!-- Section 2 -->
            <?php get_template_part('template-parts/home/section', '2'); ?>

            <!-- Section 3 -->
            <?php get_template_part('template-parts/home/section', '3'); ?>

            <!-- Section 4 -->
            <?php get_template_part('template-parts/home/section', '4'); ?>

            <!-- Section 5 -->
            <?php get_template_part('template-parts/home/section', '5'); ?>

        <?php endwhile; ?>
    </main>
<?php endif; ?>
<!-- /.container -->
<?php get_footer() ?>