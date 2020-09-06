<?php

/**
 * Displays header logo sidenav
 *
 * @package 24h_news
 * @since 24h News 1.0
 */
?>

<?php if (true) : ?>
    <div class="sidenav-header-logo" style="width: 300px">
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <?php if (has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
            <?php endif ?>
            <h2><strong style="font-family: Times New Roman; font-weight: bold">Tribrata<span>News</span></strong></h2>
            <h5><span style="display: block;font-size: 8px;font-weight: bold;line-height: 0.2">Portal Berita Resmi Polri <i style="padding: 2px; color: #fff;background-color: #d4000e;line-height: 7px">Obyektif - Dipercaya - Partisipasi</i></span><span style="font-weight: bold;line-height: 10px">Polres Pohuwato</span></h5>
        </a>
    </div>
<?php else : ?>
    <div class="sidenav-header-logo">
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <?php if (has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <h2 class="refresh-blogname"><?php bloginfo('name') ?></h2>
                <h5 class="refresh-blogdescription"><?php bloginfo('description') ?></h5>
            <?php endif; ?>
        </a>
    </div>
<?php endif ?>