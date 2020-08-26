<?php

/**
 * 24h News Theme Customizer
 *
 * @package 24h_news
 */

const LOGO_SECTION = '24hnews_logo_section';
const LOGO_TEXT_1_SETTING = '24hnews_logo_text_1';
const LOGO_TEXT_2_SETTING = '24hnews_logo_text_2';
const LOGO_IMAGE_SETTING = '24hnews_logo_image';
const LOGO_TEXT_1_CONTROL = '24hnews_logo_text_1_control';
const LOGO_TEXT_2_CONTROL = '24hnews_logo_text_2_control';
const LOGO_IMAGE_CONTROL = '24hnews_logo_image_control';

/**
 * @param WP_Customize_Manager $wp_customize
 */
function mytheme_customize_register($wp_customize)
{
    $wp_customize->add_section(LOGO_SECTION, array(
        'title' => 'Logo',
        'priority' => 30
    ));

    $wp_customize->add_setting(LOGO_TEXT_1_SETTING, array());
    $wp_customize->add_setting(LOGO_TEXT_2_SETTING, array());
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        LOGO_TEXT_1_CONTROL,
        array(
            'label' => 'Logo Text 1',
            'description' => 'Logo Text 1',
            'settings' => LOGO_TEXT_1_SETTING,
            'section' => LOGO_SECTION,
            'priority' => 10,
            'type' => 'text'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        LOGO_TEXT_2_CONTROL,
        array(
            'label' => 'Logo Text 2',
            'description' => 'Logo Text 2',
            'settings' => LOGO_IMAGE_SETTING,
            'section' => LOGO_SECTION,
            'priority' => 11,
            'type' => 'text'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        LOGO_TEXT_2_CONTROL,
        array(
            'label' => 'Logo Text 2',
            'description' => 'Logo Text 2',
            'settings' => LOGO_TEXT_2_SETTING,
            'section' => LOGO_SECTION,
            'priority' => 11,
            'type' => 'text'
        )
    ));
}
add_action('customize_register', 'mytheme_customize_register');
