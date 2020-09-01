<?php

/**
 * Displays header top menu
 *
 * @package 24h_news
 * @since 24h News 1.0
 */
?>
<!-- Begin .top-menu -->
<div class="top-menu" wp-site-content>
    <!-- Begin .container -->
    <div class="container">
        <!-- Begin .left-top-menu -->
        <?php if (has_nav_menu('social')) : ?>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'social',
                    'menu_class'     => 'left-top-menu',
                    //'link_before'    => '<i class="fa fa-',
                    //'link_after'     => '"></i>',
                    'depth'          => 1,
                )
            );
            ?>
        <?php endif ?>
        <!-- End .left-top-menu -->

        <!-- Begin .right-top-menu -->
        <ul class="right-top-menu pull-right">
            <li class="contact">
                <a href="contact.html"><i class="fa fa-map-marker fa-i"></i></a>
            </li>
            <li class="about">
                <a href="about-us.html"><i class="fa fa-user fa-i"></i></a>
            </li>
            <li>
                <div class="search-container">
                    <div class="search-icon-btn">
                        <span style="cursor:pointer"><i class="fa fa-search"></i></span>
                    </div>
                    <div class="search-input">
                        <input type="search" class="search-bar" placeholder="Search..." title="Search" />
                    </div>
                </div>
            </li>
        </ul>
        <!-- End .right-top-menu -->
    </div>
    <!-- End .container -->
</div>
<!-- End .top-menu -->