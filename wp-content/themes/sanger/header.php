<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>
        <?php if (is_front_page()) : ?>
            <?php bloginfo('name') ?>
        <?php elseif (is_single()) : ?>
            <?php echo wp_title('', true, ''); ?>
        <?php else : ?>
            <?php echo wp_title('', true, ''); ?>
        <?php endif ?>
    </title>


    <link href="<?php echo get_template_directory_uri() ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> <!-- Bootstrap CSS -->
    <link href="<?php echo get_template_directory_uri() ?>/assets/css/common.css" rel="stylesheet"> <!-- My custom CSS -->
    <link href="<?php echo get_template_directory_uri() ?>/assets/vendor/fontello/font-icons/css/fontello.css" rel="stylesheet"> <!-- font-fontello -->
    <link href="<?php echo get_template_directory_uri() ?>/assets/vendor/fontawesome-5.15.3/css/all.min.css" rel="stylesheet"> <!-- font-awesome 5 -->
    <link href="<?php echo get_template_directory_uri() ?>/assets/css/style.css" rel="stylesheet"> <!-- Style CSS -->
    <link href="<?php echo get_template_directory_uri() ?>/assets/css/responsive.css" rel="stylesheet"> <!-- Responsive CSS -->

    <!-- slick -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/vendor/slick/slick.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/vendor/slick/slick-theme.css">

    <?php wp_head() ?>
</head>

<body>
    <header>
        <div class="header-main" <?php echo is_front_page() ? 'style="background-color: var(--color-light-01);"' : '' ?>>
            <div class="header-wrapper">
                <div class="header-container">
                    <div class="header-inner">
                        <div class="header-row">
                            <div class="header-left">
                                <div class="header-nav">
                                    <div class="header-nav__menu-wrap">
                                        <?php
                                        /**
                                         * Menu
                                         */
                                        wp_nav_menu(
                                            array(
                                                'theme_location'  => 'primary-menu',
                                                'depth'  => 3,
                                                'container'  => 'nav',
                                                'container_class'      => 'primary-menu-container',
                                                'menu_class'  => 'header-nav__menu header-nav__menu-primary',
                                            )
                                        );
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <?php
                            /**
                             * Logo
                             */
                            $site_logo = get_theme_mod('logo');
                            $size_logo = get_theme_mod('size-logo');
                            ?>
                            <div class="header-midle site-info" <?php echo $size_logo ? 'style="max-width: ' . $size_logo . 'px"' : '' ?>>
                                <div class="header-midle__inner header-logo">
                                    <?php if ($site_logo) : ?>
                                        <a href="<?php echo home_url() ?>" class="header-logo__link">
                                            <div class="site-info__logo-wrap">
                                                <div class="site-info__logo">
                                                    <img src="<?php echo $site_logo; ?>" alt="Site logo" width="100%" />
                                                </div>
                                            </div>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="header-right">
                                <div class="header-right__inner">
                                    <!-- <button class="hd-cart-btn">
                                        <span class="cart-btn-icon"></span>
                                        <span class="hd-cart-short">0</span>
                                    </button> -->
                                    <button class="hd-search-btn"><span class="search-btn-icon"></span></button>
                                    <button class="hd-hamburger-btn hd-hamburger-btn--style">
                                        <span class="hamburger-btn-icon">
                                            <?php get_template_part("template-parts/icon-svg/right", "bar") ?>
                                            <!-- <img src="< ?php echo get_template_directory_uri() ?>/assets/images/right-bar.svg" alt=""> -->
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header fixed right partial-->
        <?php get_template_part("template-parts/panel", "bar") ?>
    </header>

    <!-- Layout Search -->
    <?php get_template_part("template-parts/layout", "search") ?>