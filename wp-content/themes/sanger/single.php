<?php get_header() ?>
<!-- Page Content -->
<div class="post-sg">
    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>
            <div class="post-sg__header">
                <!-- Preview Image -->
                <?php the_post_thumbnail('post-large',  ['class' => 'post-featured']) ?>
                <div class="post-sg__header-content">
                    <div class="container">
                        <!-- Category -->
                        <div class="post-cate-hd mb-4">
                            <?php the_category(' &nbsp;&#47;&nbsp; ') ?>
                        </div>
                        <!-- Title -->
                        <h1 class="mb-4 cl-white font-secondary-medium-02"><?php the_title() ?></h1>
                        <!-- Author -->
                        <div class="post-author-hd">
                            <?php $avatar_url = get_avatar_url(get_the_author_meta('ID'), array('size' => 450)); ?>
                            <!-- Author  -->
                            <div class="post-author-info-hd article-latest__category">
                                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                                    <div class="author-picture-hd" style="background-image: url('<?php echo esc_url($avatar_url); ?>')"></div>
                                </a>
                                <div class="post-author-name font-secondary-medium-01 cl-white">
                                    <?php the_author_posts_link() ?>
                                </div>
                            </div>
                            <a href="<?php the_permalink() ?>">
                                <span class="article-latest__date font-secondary-medium-01 color-light-04"><?php echo get_the_date('M j, Y') ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post-sg__content">
                <div class="container">

                    <div class="row">

                        <!-- Blog Entries Column -->
                        <div class="col-lg-8 col-12">

                            <?php get_template_part('template-parts/content-single', get_post_format()); ?>

                        </div>

                        <?php get_sidebar() ?>

                    </div>
                    <!-- /.row -->

                </div>
            </div>
        <?php endwhile; ?>

    <?php endif; ?>
</div>
<!-- /.container -->
<?php get_footer() ?>