<div class="page-header">
    <div class="container">
        <div class="page-header__inner mtext-center">
            <?php if (apply_filters('woocommerce_show_page_title', true)) : ?>
                <h1 class="page-header__title font-secondary-medium-02 woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
            <?php endif; ?>

            <?php
            /**
             * Hook: woocommerce_archive_description.
             *
             * @hooked woocommerce_taxonomy_archive_description - 10
             * @hooked woocommerce_product_archive_description - 10
             */
            do_action('woocommerce_archive_description');
            ?>
            <div class="page-header__down"><span class="page-header__down-icon icon-down-open"></span></div>
        </div>
    </div>
</div>