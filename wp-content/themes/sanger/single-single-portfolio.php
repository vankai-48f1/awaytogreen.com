<?php get_header() ?>
<!-- Page Content -->
<div class="post-sg">
    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>
            <div class="single-portfolio">
                <div class="single-portfolio__header">
                    <?php get_template_part('template-parts/header/header', 'page'); ?>
                </div>

                <div class="post-sg__content">
                    <div class="container">

                        <div class="row">

                            <!-- Blog Entries Column -->
                            <div class="col-lg-8 col-12">

                                <!-- Post Content -->
                                <div class="single-portfolio__featured-image mb-4">
                                    <?php the_post_thumbnail('post-large',  ['class' => 'post-featured']) ?>
                                </div>
                                <div class="post-body">
                                    <?php the_content() ?>
                                </div>

                            </div>

                            <div class="col-lg-4 col-12">
                                <div class="font-primary-light-02"><?php the_excerpt() ?></div>

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
                            </div>

                        </div>
                        <!-- /.row -->
                        <!-- navigation prev, next -->
                        <div class="post-nav">
                            <div class="post-nav__item post-nav__item--previous">
                                <?php if (get_next_post_link('%link', 'Prev Project', true, '', 'portfolio')) : ?>
                                    <div class="mg-bt-1">
                                        <?php next_post_link('%link', '<span class="prev-icon">Prev Project</span>', true, '', 'portfolio'); ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="post-nav__item post-nav__item--next">
                                <?php if (get_previous_post_link('%link', 'Next Project', true, '', 'portfolio')) : ?>
                                    <div class="mg-bt-1">
                                        <?php previous_post_link('%link', '<span class="next-icon">Next Project</span>', true, '', 'portfolio'); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>

    <?php endif; ?>
</div>
<!-- /.container -->
<?php get_footer() ?>