<?php

/**
 * Displays header logo sidenav
 *
 * @package 24h_news
 * @since 24h News 1.0
 */
?>

<?php if (true) : ?>
    <div class="site-logo" style="border:1px solid">
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="/tbn/images/logo_2.png" alt="Site Logo" style="width: unset;margin-top:15px;margin-right:0">
            <h2 style="margin:6px 0 0 0;font-size:25px"><strong style="font-family: Times New Roman; font-weight: bold; color:#d4000e">Tribrata<span style="color:#515252">News</span></strong></h2>
            <h5><span style="display: block;font-size: 8px;font-weight: bold;line-height: 0.2">Portal Berita Resmi Polri <i style="padding: 2px; color: #fff;background-color: #d4000e;line-height: 7px">Obyektif - Dipercaya - Partisipasi</i></span><span style="font-weight: bold;line-height: 10px">Polda</span></h5>
        </a>
    </div>
<?php else : ?>
    <div class="site-logo">
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <?php if (has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <h3 class="refresh-blogname"><?php bloginfo('name') ?></h3>
                <p class="refresh-blogdescription"><?php bloginfo('description') ?></p>
            <?php endif; ?>
        </a>
    </div>
<?php endif ?>