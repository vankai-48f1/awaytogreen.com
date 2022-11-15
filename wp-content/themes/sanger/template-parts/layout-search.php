<div class="layout-search">
    <div class="layout-search__container">
        <div class="layout-search__header">
            <?php
            $logo = get_theme_mod('logo');
            ?>
            <?php if ($logo) : ?>
                <div class="layout-search__logo">
                    <img src="<?php echo $logo; ?>" alt="Site logo" width="100%" />
                </div>
            <?php endif; ?>
            <div class="layout-search__close"></div>
        </div>
        <form action="<?php bloginfo('url'); ?>/">
            <div class="layout-search__input-group">
                <input type="text" value="<?php the_search_query(); ?>" name="s" placeholder="Search for...">
                <span class="layout-search__btn-group">
                    <button class="layout-search__btn"><span class="search-btn-icon"></span></button>
                </span>
            </div>
        </form>
    </div>
</div>