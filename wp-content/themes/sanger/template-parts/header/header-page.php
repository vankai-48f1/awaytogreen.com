<?php
global $post;
$featured_image = '';
if (has_post_thumbnail($post->ID) && get_post_type() == "page") {
    $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
}
?>
<div class="page-header<?php echo !empty($featured_image) ? ' awtg-overlay-image' : ''; ?>" <?php echo !empty($featured_image) ? 'style="background: no-repeat center/cover url(' . $featured_image[0] . ');"' : '' ?>>
    <div class="container page-header__container">
        <div class="page-header__inner mtext-center">
            <h1 class="page-header__title font-secondary-medium-02<?php echo !empty($featured_image) ? ' cl-white' : ''; ?>"><?php echo is_category() ? single_cat_title() : get_the_title(); ?></h1>
            <div class="page-header__down"><span class="page-header__down-icon icon-down-open<?php echo !empty($featured_image) ? ' cl-white' : ''; ?>"></span></div>
        </div>
    </div>
</div>