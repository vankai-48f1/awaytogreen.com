<?php

/**
 * Template Name: Contacts
 */
get_header();
?>
<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>
        <!-- Header -->
        <?php get_template_part('template-parts/header/header', 'page'); ?>

        <div class="page-contact">
            <!-- Offices -->
            <div class="contact-office">
                <div class="container">
                    <?php
                    if (have_rows('office')) : ?>
                        <div class="contact-office__list row justify-content-center">
                            <?php while (have_rows('office')) : the_row(); ?>
                                <?php
                                $office_image = get_sub_field('image');
                                $office_name = get_sub_field('name');
                                $office_location = get_sub_field('location');
                                $office_coordinates = get_sub_field('coordinates');
                                ?>
                                <div class="contact-office__item col-md-4 col-12">
                                    <div class="contact-office__item-inner mtext-center">
                                        <div class="contact-office__icon mb-4">
                                            <?php if ($office_image) : ?>
                                                <img src="<?php echo $office_image ?>" alt="">
                                            <?php endif; ?>
                                        </div>
                                        <div class="contact-office__info mb-4">
                                            <div class="contact-office__name font-secondary-medium-03 mb-2"><?php echo $office_name; ?></div>
                                            <div class="contact-office__location font-primary-light-04 color-light-03"><?php echo $office_location; ?></div>
                                            <div class="contact-office__btn">
                                                <span class="contact-office__btn-text">Get in Touch</span>
                                                <span class="contact-office__btn-icon"></span>
                                                <input type="hidden" name="office_coordinates" value="<?php echo $office_coordinates; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Map -->
            <div class="contact-map">
                <div class="contact-map__inner">
                    <div class="contact-map__left">
                        <div class="contact__information-map">
                            <iframe src="https://maps.google.com/maps?q=<?php echo get_field('office')[0]['coordinates'] ?>&output=embed" width="900" height="710" frameborder="0" style="border:0"></iframe>
                        </div>
                    </div>
                    <div class="contact-map__right">
                        <div class="contact-map__right-inner">
                            <?php
                            $form_contact = get_field('form_contact');
                            ?>
                            <h3 class="font-secondary-medium-01 color-dark-01 mb-1"><?php echo $form_contact['subtitle'] ?></h3>
                            <h2 class="font-secondary-medium-02 color-dark-01 mb-4"><?php echo $form_contact['title'] ?></h2>
                            <div class="contact-map__form">
                                <?php echo do_shortcode($form_contact['form']) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>

<?php endif; ?>
<?php get_footer(); ?>