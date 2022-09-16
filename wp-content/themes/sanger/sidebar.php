<?php
if (is_tax('product_cat') || is_shop() || is_product_category() || is_product()) : ?>
    <?php dynamic_sidebar('sidebar-woocommerce'); ?>
<?php else : ?>
    <!-- Sidebar Widgets Column -->
    <div class="col-lg-4 col-12">

        <?php dynamic_sidebar('sidebar'); ?>

    </div>
<?php endif; ?>