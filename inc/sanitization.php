<?php

/**
 * Define sanitize functions for customizer fields
 *
 * @package 24h_news
 * @since 1.0.0
 */

if (!function_exists('empatduah_sanitize_select')) {
    /**
     * Sanitizing the select callback example
     *
     * @since 24h_news 1.0.0
     *
     * @see sanitize_key()               https://developer.wordpress.org/reference/functions/sanitize_key/
     * @see $wp_customize->get_control() https://developer.wordpress.org/reference/classes/wp_customize_manager/get_control/
     *
     * @param $input
     * @param $setting
     * @return sanitized output
     */

    function empatduah_sanitize_select($input, $setting)
    {

        // Ensure input is a slug.
        $input = sanitize_text_field($input);

        // Get list of choices from the control associated with the setting.
        $choices = $setting->manager->get_control($setting->id)->choices;

        // If the input is a valid key, return it; otherwise, return the default.
        return (array_key_exists($input, $choices) ? $input : $setting->default);
    }
}
