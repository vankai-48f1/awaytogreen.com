<div class="hm-section-1">
    <div class="container">

        <?php $content_section_1 = get_field('content_section_1'); ?>
        <div class="row">
            <div class="col-md-6 col-12">
                <h3 class="font-secondary-medium-01 color-dark-01 mb-3"><?php echo $content_section_1['subtitle'] ?></h3>
            </div>
            <div class="col-md-6 col-12"></div>
            <div class="col-md-6 col-12">
                <div class="hm-section-1__hd">
                    <h2 class="font-secondary-medium-02 color-dark-01 mb-4"><?php echo $content_section_1['title'] ?></h2>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="hm-section-1__content">
                    <div class="hm-section-1__main-content font-primary-light-02 mb-3">
                        <?php echo $content_section_1['description'] ?>
                    </div>
                    <a href="<?php echo $content_section_1['link_section_1']['url'] ? $content_section_1['link_section_1']['url'] : '#' ?>" class="color-dark-01 read-more-01">
                        <?php echo $content_section_1['link_section_1']['title'] ? $content_section_1['link_section_1']['title'] : 'Read More' ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>