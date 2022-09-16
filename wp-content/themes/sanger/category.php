<?php get_header() ?>
<!-- Header -->
<?php get_template_part('template-parts/header/header', 'page'); ?>
<!-- Page Content -->
<div class="category">
    <div class="container">
        <?php if (have_posts()) : ?>
            <div class="row">
                <?php while (have_posts()) : the_post(); ?>

                    <div class="col-lg-4 col-md-6 col-12 mb-4">
                        <?php get_template_part('template-parts/article', 'part'); ?>
                    </div>

                <?php endwhile; ?>
            </div>
            <!-- /.row -->
        <?php endif; ?>
        
        <!-- Pagination -->
        <?php post_pagination() ?>
    </div>
</div>
<!-- /.container -->
<?php get_footer() ?>