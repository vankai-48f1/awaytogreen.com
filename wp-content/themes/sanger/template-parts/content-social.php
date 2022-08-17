<!-- Social -->
<?php if (have_rows('list_social', 'option')) : ?>
    <ul class="social">
        <?php while (have_rows('list_social', 'option')) : the_row();
            $icon = get_sub_field('icon');
            $name_social = get_sub_field('name_social');
            $link_social = get_sub_field('link_social');
        ?>
            <?php if ($icon) : ?>
                <li class="social__item">
                    <a href="<?php echo $link_social ? $link_social : "#"; ?>">
                        <i class="<?php echo $icon ?>"></i><span class="social__item-name"><?php echo $name_social; ?></span>
                    </a>
                </li>
            <?php endif; ?>
        <?php endwhile; ?>
    </ul>
<?php endif; ?>