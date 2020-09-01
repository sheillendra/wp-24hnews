<?php

/**
 * Displays header logo header
 *
 * @package 24h_news
 * @since 24h News 1.0
 */
?>

<?php if (true) : ?>
    <div class="header-logo" style="width: 300px">
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <?php the_custom_logo(); ?>
            <h1><strong style="font-family: Times New Roman; font-weight: bold">Tribrata<span>News</span></strong></h1>
            <h4><span style="display: block;font-size: 8px;font-weight: bold;line-height: 0.2">Portal Berita Resmi Polri <i style="padding: 2px; color: #fff;background-color: #d4000e;line-height: 7px">Obyektif - Dipercaya - Partisipasi</i></span><span style="font-weight: bold;line-height: 10px">Polres Pohuwato</span></h4>
        </a>
    </div>
<?php else : ?>
    <!-- Begin .header-logo -->
    <div class="header-logo">
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <?php if (has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <h1 class="refresh-blogname"><?php bloginfo('name') ?></h1>
                <h4 class="refresh-blogdescription"><?php bloginfo('description') ?></h4>
            <?php endif; ?>
        </a>
    </div>
    <!-- End .header-logo -->
<?php endif ?>