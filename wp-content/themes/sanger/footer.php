<!-- Footer -->
<footer class="footer py-4 bg-dark">
    <div class="container-sm">
        <div class="row footer-row">
            <div class="col-md-5 col-sm-12">
                <div class="footer-copyright"><?php echo get_field("copyright", "option") ?></div>
            </div>
            <div class="col-md-2 col-sm-12">
                <?php
                /**
                 * Logo
                 */
                $site_logo = get_theme_mod('logo-light');
                $size_logo = get_theme_mod('size-logo');
                ?>
                <div class="footer-midle site-info" <?php echo $size_logo ? 'style="max-width: ' . $size_logo . 'px"' : '' ?>>
                    <div class="footer-midle__inner footer-logo">
                        <div class="site-info__logo-wrap">
                            <div class="site-info__logo">
                                <img src="<?php echo $site_logo; ?>" alt="Site logo" width="100%" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-sm-12">
                <!-- Social -->
                <div class="footer-social">
                    <?php get_template_part('template-parts/content', 'social') ?>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="<?php echo get_template_directory_uri() ?>/assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/vendor/slick/slick.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/main.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/slider.js" type="module"></script>

<?php wp_footer() ?>
</body>

</html>