<?php get_header() ?>
<div class="page-search">
    <!-- Header -->
    <div class="page-search__header">
        <?php
        $param = array(
            'title' => 'Search: ' . get_search_query()
        )
        ?>
        <?php get_template_part('template-parts/header/header', 'page-dynamic', $param); ?>
    </div>
    <!-- Page Content -->
    <div class="page-search__posts" style="padding: 70px 0 0;">
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
            <?php else : ?>

                <h2 class="mb-3">
                    Không có bài viết nào phù hợp với từ khóa: <strong><?php the_search_query(); ?></strong>
                </h2>

                <form action="<?php bloginfo('url'); ?>/">
                    <div class="input-group">
                        <input type="text" class="form-control" value="<?php the_search_query(); ?>" name="s" placeholder="Search for..." style="font-size: 18px;">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="button"><span class="search-btn-icon"></span></button>
                        </span>
                    </div>
                </form>

            <?php endif; ?>
            <!-- Pagination -->
            <?php post_pagination() ?>
        </div>
    </div>
</div>
<!-- /.container -->
<?php get_footer() ?>