<div class="hm-section-4">
    <div class="container">
        <?php $content_section_4 = get_field('content_section_4') ?>
        <div class="hm-section-4__header mtext-center mb-5">
            <h3 class="font-secondary-medium-01 color-dark-01 mb-3"><?php echo $content_section_4['subtitle'] ?></h3>
            <h2 class="font-secondary-medium-02 color-dark-01"><?php echo $content_section_4['title'] ?></h2>
        </div>

        <div class="hm-section-4__body">
            <div class="hm-section-4__list mb-5">
                <?php $content_section_4['category'] ? mtem_get_latest_post($content_section_4['category'], 3) : null; ?>
            </div>
            <div class="hm-section-4__see-all mtext-center">
                <a href="<?php echo $content_section_4['category'] ? get_category_link($content_section_4['category']) : '#' ?>" class="button-type-01">View All Article</a>
            </div>
        </div>
    </div>
</div>