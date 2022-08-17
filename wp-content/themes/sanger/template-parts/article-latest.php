<article class="article-latest mb-4">
    <div class="article-latest__wrapper">
        <div class="article-latest__top mb-3">
            <!-- Categories  -->
            <a href="<?php echo get_category_link(get_the_category()[0]->term_id) ?>" class="article-latest__category font-secondary-medium-01 color-dark-01"><?php echo get_the_category()[0]->name ?></a>
            <a href="<?php the_permalink() ?>">
                <span class="article-latest__date font-secondary-medium-01 color-light-04"><?php echo get_the_date('M j, Y') ?></span>
            </a>
        </div>

        <h2 class="article-latest__title font-secondary-medium-06 color-dark-01 mb-3"><?php the_title() ?></h2>
        <div class="article-latest__content font-primary-light-04 color-light-03 mb-3">
            <?php echo get_the_excerpt() ?>
        </div>
        <div class="article-latest__read-more">
            <span class="read-more-arrow color-dark-01"></span>
        </div>
        <a href="<?php the_permalink() ?>" class="article-latest__fill-link">
        </a>
    </div>
</article>