<div class="hm-section-3">
    <div class="container">
        <?php
        if (have_rows('content_section_3')) : while (have_rows('content_section_3')) : the_row();
                $title_ss = get_sub_field('title');
                $subtitle_ss = get_sub_field('subtitle');
                $description_ss = get_sub_field('description');
                $link_ss = get_sub_field('link');
        ?>
                <div class="row">
                    <div class="col-lg-4 col-12">
                        <div class="hm-section-3__hd">
                            <h3 class="font-secondary-medium-01 color-dark-01 mb-3"><?php echo $subtitle_ss ?></h3>
                        </div>
                    </div>
                    <div class="col-lg-8 col-12"></div>

                    <div class="col-lg-4 col-12">
                        <div class="hm-section-3__hd">
                            <h2 class="font-secondary-medium-02 color-dark-01"><?php echo $title_ss ?></h2>
                        </div>
                    </div>
                    <div class="col-lg-8 col-12">
                        <div class="hm-section-3__content">
                            <div class="hm-section-3__main-content font-primary-light-02 color-dark-02">
                                <?php echo $description_ss ?>
                            </div>
                            <div class="hm-section-3__link">
                                <a href="<?php echo $link_ss ? $link_ss['url'] : '#'; ?>" class="font-secondary-medium-04 color-dark-01 read-more-02">
                                    <?php echo $link_ss ? $link_ss['title'] : 'Discover'; ?>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12"></div>
                    <div class="col-lg-8 col-12">
                        <div class="hm-section-3__list">
                            <div class="row">
                                <?php
                                if (have_rows('list')) : while (have_rows('list')) : the_row();
                                        $name = get_sub_field('name');
                                        $category = get_sub_field('category');
                                        $excerpt = get_sub_field('excerpt');
                                        $year = get_sub_field('year');
                                        $link_post = get_sub_field('link');
                                ?>
                                        <div class="col-md-6 col-12">
                                            <article class="hm-section-3__post">
                                                <a href="<?php echo $link_post ? $link_post : '#'; ?>" class="hm-section-3__post-name">
                                                    <h3 class="font-secondary-medium-04 color-dark-01"><?php echo $name; ?></h3>
                                                    <!-- < ?php if ($year) : ?>
                                                        <div class="hm-section-3__post-year font-secondary-medium-04 color-dark-01">< ?php echo $year; ?></div>
                                                    < ?php endif; ?> -->
                                                </a>
                                                <!-- <div class="hm-section-3__post-cate color-light-02 font-primary-light-03 ">< ?php echo $category ?></div> -->
                                                <div class="hm-section-3__post-desc color-dark-02 font-primary-light-04"><?php echo $excerpt ?></div>
                                            </article>
                                        </div>
                                <?php
                                    endwhile;
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
        <?php
            endwhile;
        endif;
        ?>
    </div>
</div>