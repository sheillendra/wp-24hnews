<?php

/**
 * 24h News Theme Customizer
 *
 * @package 24h_news
 */

const DEH_CUSTOMIZER_PANEL_GENERAL = 'duaempath_customizer_panel_general';

/**
 * @param WP_Customize_Manager $wp_customize
 */
function duaempath_customize_register($wp_customize)
{
    $wp_customize->get_setting('blogname')->transport         = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport  = 'postMessage';

    if (isset($wp_customize->selective_refresh)) {
        $wp_customize->selective_refresh->add_partial(
            'blogname',
            array(
                'selector'        => '.refresh-blogname',
                'render_callback' => 'duaempath_customize_partial_blogname',
            )
        );
        $wp_customize->selective_refresh->add_partial(
            'blogdescription',
            array(
                'selector'        => '.refresh-blogdescription',
                'render_callback' => 'duaempath_customize_partial_blogdescription',
            )
        );
    }

    // Add Homepage General Setting Panel.
    $wp_customize->add_panel(
        DEH_CUSTOMIZER_PANEL_GENERAL,
        array(
            'title'      => esc_html__('General Setting', DEH_TEXT_DOMAIN),
            'priority'   => 21,
        )
    );

    // Breaking News.
    $wp_customize->add_section(
        'section_breaking_news',
        array(
            'title'      => esc_html__('Breaking News Options', DEH_TEXT_DOMAIN),
            'priority'   => 1,
            'panel'      => DEH_CUSTOMIZER_PANEL_GENERAL,
        )
    );
}
add_action('customize_register', 'duaempath_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function duaempath_customize_partial_blogname()
{
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function duaempath_customize_partial_blogdescription()
{
    bloginfo('description');
}
