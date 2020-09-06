<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package 24h_news
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <!-- <meta name="description" content="24h News - Broadcast News TV Channel & News Magazine Template"> -->
    <!-- <meta name="author" content="Via-Theme"> -->
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Site Title  -->
    <!-- <title>Home | 24h News</title> -->
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/assets/img/favicon.png" type="image/x-icon" />
    <!-- Web Fonts  -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed%7CRoboto+Slab:300,400,700%7CRoboto:300,400,500,700" rel="stylesheet"> -->
    <!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
    <!-- <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css"> -->
    <?php wp_head(); ?>
</head>

<body>
    <div id="pageloader">
        <div class="loader-item">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/load.gif" alt='loader' />
        </div>
    </div>
    <!--========== BEGIN #WRAPPER ==========-->
    <div id="wrapper" data-color="red">
        <!--========== BEGIN #HEADER ==========-->
        <header id="header">
            <?php get_template_part('template-parts/header/menu', 'top'); ?>
            <!-- Begin .container -->
            <div class="container">
                <?php get_template_part('template-parts/header/logo', 'header'); ?>
                <!-- Begin .header-add-place -->
                <div class="header-add-place">
                    <div class="desktop-add">
                        <a href="https://themeforest.net/item/24h-news-broadcast-news-tv-channel-news-magazine-template/18614179" target="_blank">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/banner_728x90.jpg" alt="">
                        </a>
                    </div>
                </div>
                <!-- End .header-add-place -->
                <!--========== BEGIN .NAVBAR #MOBILE-NAV ==========-->
                <nav class="navbar navbar-default" id="mobile-nav">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" id="sidenav-toggle">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <?php get_template_part('template-parts/header/logo', 'sidenav'); ?>
                    </div>
                    <div class="sidenav" data-sidenav data-sidenav-toggle="#sidenav-toggle">
                        <button type="button" class="navbar-toggle active" data-toggle="collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="sidenav-brand">
                            <?php get_template_part('template-parts/header/logo', 'sidenav'); ?>
                        </div>
                        <?php get_template_part('template-parts/header/menu', 'sidenav'); ?>
                    </div>
                </nav>
                <!--========== END .NAVBAR #MOBILE-NAV ==========-->
            </div>
            <!-- End .container -->
            <!--========== BEGIN .NAVBAR #FIXED-NAVBAR ==========-->
            <div class="navbar" id="fixed-navbar">
                <!--========== BEGIN MAIN-MENU .NAVBAR-COLLAPSE COLLAPSE #FIXED-NAVBAR-TOOGLE ==========-->
                <div class="main-menu nav navbar-collapse collapse" id="fixed-navbar-toggle">
                    <!--========== BEGIN .CONTAINER ==========-->
                    <div class="container">
                    <?php get_template_part('template-parts/header/menu', 'main'); ?>
                    </div>
                    <!--========== END .CONTAINER ==========-->
                </div>
                <!--========== END MAIN-MENU .NAVBAR-COLLAPSE COLLAPSE #FIXED-NAVBAR-TOOGLE ==========-->
                <!--========== BEGIN .SECOND-MENU NAVBAR #NAV-BELOW-MAIN ==========-->
                <div class="second-menu navbar" id="nav-below-main">
                    <!-- Begin .container -->
                    <div class="container">
                        <!-- Begin .collapse navbar-collapse -->
                        <div class="collapse navbar-collapse nav-below-main">
                        <?php //get_template_part('template-parts/header/menu', 'second'); ?>
                        </div>
                        <!-- End .collapse navbar-collapse -->
                        <!-- Begin .clock -->
                        <div class="clock">
                            <div id="time"></div>
                            <div id="date"></div>
                        </div>
                        <!-- End .clock -->
                    </div>
                    <!-- End .container -->
                </div>
                <!--========== END .SECOND-MENU NAVBAR #NAV-BELOW-MAIN ==========-->
            </div>
        </header>