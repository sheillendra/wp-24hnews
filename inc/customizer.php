<?php

/**
 * 24h News Theme Customizer
 *
 * @package 24h_news
 */


/**
 * @param WP_Customize_Manager $wp_customize
 */
function duaempath_news_customize_register($wp_customize)
{
    $wp_customize->get_setting('blogname')->transport         = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport  = 'postMessage';

    if (isset($wp_customize->selective_refresh)) {
        $wp_customize->selective_refresh->add_partial(
            'blogname',
            array(
                'selector'        => '.refresh-blogname',
                'render_callback' => 'duaempath_news_customize_partial_blogname',
            )
        );
        $wp_customize->selective_refresh->add_partial(
            'blogdescription',
            array(
                'selector'        => '.refresh-blogdescription',
                'render_callback' => 'duaempath_news_customize_partial_blogdescription',
            )
        );
    }
}
add_action('customize_register', 'duaempath_news_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function duaempath_news_customize_partial_blogname()
{
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function duaempath_news_customize_partial_blogdescription()
{
    bloginfo('description');
}
