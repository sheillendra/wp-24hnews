<?php

/**
 * Displays header main menu
 *
 * @package 24h_news
 * @since 24h News 1.0
 */
?>

<?php if (has_nav_menu('menu-1')) : ?>
    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'menu-1',
            'menu_class'     => 'nav navbar-nav',
            'walker' => new Duaempath_Walker_Nav_Menu(),
            'has_children_class' => 'dropdown',
            'submenu_toggle_class' => 'dropdown-toggle',
            'depth'          => 2,
        )
    );
    ?>
<?php endif ?>

<!-- Begin .nav navbar-nav -->
<!-- <ul class="nav navbar-nav">
    <li class="active">
        <a href="index-2.html">Home</a>
    </li>
    <li>
        <a href="world.html">World</a>
    </li>
    <li>
        <a href="news.html">News</a>
    </li>
    <li>
        <a href="sport.html">Sport</a>
    </li>
    <li>
        <a href="health.html">Health</a>
    </li>
    <li>
        <a href="travel.html">Travel</a>
    </li>
    <li>
        <a href="art-entertainment.html">Art & Entertainment</a>
    </li>
    <li>
        <a href="tv-schedule.html">TV Schedule</a>
    </li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">More</a>
        <ul class="dropdown-menu">
            <li>
                <a href="coming-soon.html">Coming Soon</a>
            </li>
            <li>
                <a href="autos.html">Autos</a>
            </li>
            <li>
                <a href="deals.html">Deals</a>
            </li>
            <li>
                <a href="environment.html">Environment</a>
            </li>
            <li>
                <a href="about-us.html">About us</a>
            </li>
        </ul>
    </li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages</a>
        <ul class="dropdown-menu">
            <li>
                <a href="single-post.html">Single Post</a>
            </li>
            <li>
                <a href="404.html">Error 404 Page</a>
            </li>
            <li>
                <a href="shortcodes.html">Shortcodes</a>
            </li>
            <li>
                <a href="video.html">Video</a>
            </li>
            <li>
                <a href="video-full.html">Video Full Width</a>
            </li>
        </ul>
    </li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact</a>
        <ul class="dropdown-menu">
            <li>
                <a href="contact.html">Contact</a>
            </li>
            <li>
                <a href="contact-1.html">Contact 1</a>
            </li>
        </ul>
    </li>
    <li class="dropdown mega-dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mega Menu</a>
        <ul class="dropdown-menu mega-dropdown-menu">
            <li class="col-sm-4">
                <h3 class="title">24h News In Pictures</h3>
                <div id="carousel-1" class="nav-slider carousel slide slide-carousel" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-1" data-slide-to="1"></li>
                        <li data-target="#carousel-1" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/menu_slide-image01.jpg" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/menu_slide-image02.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/menu_slide-image03.jpg" alt="">
                        </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-1" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                    <a class="right carousel-control" href="#carousel-1" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                </div>
            </li>
            <li class="col-sm-4">
                <h3 class="title">Latest News</h3>
                <ul class="media-list">
                    <li class="media">
                        <a class="pull-right" href="news.html">
                            <img class="img-responsive" alt="" src="<?php echo get_template_directory_uri() ?>/assets/img/menu_small-image01.jpg">
                        </a>
                        <div class="media-body">
                            <p> <a href="news.html" target="_blank"><span class="bg-1">News</span></a><a href="news.html">Thousands of people have demonstrated against...</a></p>
                        </div>
                    </li>
                    <li class="media">
                        <a class="pull-right" href="sport.html">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/menu_small-image02.jpg" alt="" class="img-image media-object">
                        </a>
                        <div class="media-body">
                            <p> <a href="sport.html" target="_blank"><span class="bg-4">Sport</span></a><a href="sport.html">Europe's top four leagues are to be guaranteed four places...</a></p>
                        </div>
                    </li>
                    <li class="media">
                        <a class="pull-right" href="health.html">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/menu_small-image03.jpg" alt="" class="img-image media-object">
                        </a>
                        <div class="media-body">
                            <p><a href="health.html" target="_blank"><span class="bg-2">Health</span></a><a href="health.html">Robot performs surgery on soft tissue better than human...</a></p>
                        </div>
                    </li>
                    <li class="media">
                        <a class="pull-right" href="lifestyle.html">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/menu_small-image04.jpg" alt="" class="img-image media-object">
                        </a>
                        <div class="media-body">
                            <p><a href="lifestyle.html" target="_blank"><span class="bg-9">Lifestyle</span></a><a href="lifestyle.html">A positive lifestyle can bring you happiness...</a></p>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="col-sm-4">
                <h3 class="title">Video</h3>
                <div class="video-container">
                    <iframe src="https://player.vimeo.com/video/100192146?title=0&amp;byline=0&amp;portrait=0" class="video" title="Advertisement"></iframe>
                </div>
            </li>
            <li class="col-sm-8">
                <h3 class="title">About Us</h3>
                <p><a href="about-us.html" target="_blank"><strong>24h News</strong> is among the world's entry-posters in online news and information delivery. Help us make your comments count. Use our viewer comment page to tell us what you think about our shows and our hot topics for the day.</a></p>
            </li>
            <li class="col-sm-4">
                <h3 class="title">Follow Us</h3>
                <div class="menu-social-icons">
                    <ul>
                        <li>
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
                        </li>
                        <li>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        </li>
                        <li>
                            <a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
                        </li>
                        <li>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        </li>
                        <li>
                            <a href="#" class="rss"><i class="fa fa-rss"></i></a>
                        </li>
                        <li>
                            <a href="#" class="tumblr"><i class="fa fa-tumblr"></i></a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </li>
</ul> -->
<!--========== END .NAV NAVBAR-NAV ==========-->