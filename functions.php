<?php
// Social Media Handling
function footer_social($wp_customize)
{
    $wp_customize->add_section('social_section', array(
        'title'    => __('Social Media', 'travelling-consultant-agency'),
        'priority' => 30,
    ));
    // Facebook setting and control
    $wp_customize->add_setting('facebook', array(
        'default' => 'https://facebook.com',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('facebook', array(
        'label' => __('Facebook URL', 'travelling-consultant-agency'),
        'section' => 'social_section',
        'type' => 'url',
    ));
    // Instagram setting and control
    $wp_customize->add_setting('instagram', array(
        "default" => "https://instagram.com",
        "sanitize_callback" => 'esc_url_raw',
    ));
    $wp_customize->add_control('instagram', array(
        'label' => __('Instagram URL', 'travelling-consultant-agency'),
        'section' => 'social_section',
        'type' => 'url',
    ));
    // Twitter setting and control
    $wp_customize->add_setting('twitter', array(
        "default" => "https://twitter.com",
        "sanitize_callback" => 'esc_url_raw',
    ));
    $wp_customize->add_control('twitter', array(
        'label' => __("Twitter URL", 'travelling-consultant-agency'),
        'section' => 'social_section',
        'type' => 'url',
    ));
};
add_action('customize_register', 'footer_social');

// 