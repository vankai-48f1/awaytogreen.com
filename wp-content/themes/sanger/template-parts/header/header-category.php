<?php
$featured_image = get_field('featured_image_custom', get_queried_object());
?>
<div class="page-header header-category<?php echo !empty($featured_image) ? ' awtg-overlay-image' : ''; ?>" <?php echo !empty($featured_image) ? 'style="background: no-repeat center/cover url(' . $featured_image . ');"' : '' ?>>
</div>
<!-- <div class="header-category<?php echo !empty($featured_image) ? ' awtg-overlay-image' : ''; ?>">
    <?php echo !empty($featured_image) ? '<img class="w-100" src="' . $featured_image . '" alt="">' : '' ?>
</div> -->