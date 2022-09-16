<?php

get_header();
?>
<div class="page-portfolio">
    <!-- Header -->
    <div class="page-portfolio__header">
        <?php get_template_part('template-parts/header/header', 'page'); ?>
    </div>

    <!-- content -->
    <div class="page-portfolio__main">
        <div class="container">
            <?php
            $id_my_term =  get_queried_object()->term_id;
            //var_dump($list_term_name);
            $args = array(
                'post_type' => 'single-portfolio',
                'type' => 'post',
                'order' => 'DESC',
                'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
                'posts_per_page' => 6,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'portfolio',
                        'field' => 'id',
                        'terms' => $id_my_term
                    )
                )
            );
            $the_query = new WP_Query($args);

            $post_count = $the_query->post_count;
            // The Loop
            if ($the_query->have_posts()) : ?>
                <div class="portfolio-list">
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="portfolio-item">
                            <a href="<?php the_permalink(); ?>" class="portfolio-item__link-wrap"></a>
                            <div class="portfolio-item__thumb">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="portfolio-item__content">
                                <h2 class="portfolio-item__title font-secondary-medium-03"><?php the_title(); ?></h2>
                                <div class="portfolio-item__category">
                                    <?php vk_the_portfolio_cate(); ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php
            endif;

            post_pagination(get_query_var('paged') ? get_query_var('paged') : 1, $the_query->max_num_pages, $the_query);
            // Reset Post Data
            wp_reset_postdata();

            ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>