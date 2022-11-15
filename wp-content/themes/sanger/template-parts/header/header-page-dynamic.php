<div class="page-header<?php echo !empty($args['featured_image']) ? ' awtg-overlay-image' : ''; ?>" <?php echo !empty($args['featured_image']) ? 'style="background: no-repeat center/cover url(' . $args['featured_image'][0] . ');"' : '' ?>>
    <div class="container page-header__container">
        <div class="page-header__inner mtext-center">
            <h1 class="page-header__title font-secondary-medium-02<?php echo !empty($args['featured_image']) ? ' cl-white' : ''; ?>"><?php echo $args['title'] ?></h1>
            <div class="page-header__down"><span class="page-header__down-icon icon-down-open<?php echo !empty($args['featured_image']) ? ' cl-white' : ''; ?>"></span></div>
        </div>
    </div>
</div>