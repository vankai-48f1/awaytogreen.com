<?php
$featured_posts = get_field('content_section_2');
if ($featured_posts) : ?>
    <section class="hm-featured-post">
        <?php foreach ($featured_posts as $featured_post) :
            $permalink = get_permalink($featured_post->ID);
            $title = get_the_title($featured_post->ID);
            $excerpt = get_the_excerpt($featured_post->ID);
            $thumbnail = get_the_post_thumbnail($featured_post->ID);
        ?>
            <article class="hm-featured-post__item">
                <div class="hm-featured-post__item-inner">
                    <a href="<?php echo esc_url($permalink); ?>" class="hm-featured-post__item-link">
                        <div class="hm-featured-post__item-thumb">
                            <?php echo $thumbnail ?>
                        </div>

                        <div class="hm-featured-post__item-content">
                            <h3 class="hm-featured-post__item-title font-secondary-medium-03 color-dark-01"><?php echo esc_html($title); ?></h3>
                            <div class="hm-featured-post__item-excerpt color-dark-01"><?php echo $excerpt; ?></div>
                        </div>
                    </a>
                </div>
            </article>
        <?php endforeach; ?>
    </section>
<?php endif; ?>