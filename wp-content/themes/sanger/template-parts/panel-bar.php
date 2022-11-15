<div class="panel-bar" id="panel-bar">
    <div class="panel-bar__inner">
        <!-- Input Search -->
        <div class="panel-bar__header">
            <?php
            /**
             * Logo
             */
            $site_logo = get_theme_mod('logo');
            $size_logo = get_theme_mod('size-logo');
            ?>
            <div class="panel-bar__logo site-info" <?php echo $size_logo ? 'style="max-width:' . $size_logo . 'px"' : ""; ?>>
                <?php if ($site_logo) : ?>
                    <a href="<?php echo home_url() ?>" class="panel-bar__link">
                        <div class="site-info__logo-wrap">
                            <div class="site-info__logo">
                                <img src="<?php echo $site_logo; ?>" alt="Site logo" width="100%" />
                            </div>
                        </div>
                    </a>
                <?php endif; ?>
            </div>

            <div class="paner-bar__close">
                <div class="panel-bar__close-btn">
                    <span class="paner-bar__close-icon"></span>
                </div>
            </div>
        </div>

        <?php
        wp_nav_menu(
            array(
                'theme_location'  => 'primary-menu',
                'depth'  => 3,
                'container'  => 'nav',
                'container_class'      => 'panel-bar-menu-wrap',
                'menu_class'  => 'header-nav__menu panel-bar__menu',
            )
        );
        ?>
        <!-- Social -->
        <div class="panel-bar__social">
            <?php get_template_part('template-parts/content', 'social') ?>
        </div>
        <!-- Btn Close -->
        <div class="panel-bar__contact">
            <a href="<?php echo get_field('phone_number_global', 'option') ? 'tel:' + get_field('phone_number_global', 'option') : '#'  ?>" class="panel-bar__phone-number font-secondary-medium-03 color-dark-01"><?php echo get_field('phone_number_global', 'option') ?></a>
            <a href="<?php echo get_field('email_global', 'option') ? 'mailto:' + get_field('email_global', 'option') : '#'  ?>" class="panel-bar__email font-primary-light font-primary-light-02 color-light-03"><?php echo get_field('email_global', 'option') ?></a>
        </div>
    </div>
</div>