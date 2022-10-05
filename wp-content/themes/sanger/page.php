<?php get_header() ?>
<!-- Page Content -->
<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>
        <?php if (is_cart() || is_checkout() || is_page('wishlist') || is_account_page() || is_shop()) : ?>
            <div class="pd-t-3 pd-bt-3">
                woocommerce
                <?php the_content(); ?>
            </div>
        <?php else : ?>

            <!-- Header -->
            <?php get_template_part('template-parts/header/header', 'page'); ?>

            <div class="container">

                <div class="row py-5">

                    <!-- Blog Entries Column -->
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="page-body">
                        <?php get_template_part('template-parts/content-page', get_post_format()); ?>
                        </div>

                    </div>
                    <div class="col-md-1"></div>
                    <!--< ?php get_sidebar() ?>-->

                </div>
                <!-- /.row -->

            </div>
        <?php endif; ?>
    <?php endwhile; ?>

<?php endif; ?>

<!-- /.container -->
<?php get_footer() ?>