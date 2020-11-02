<?php
function hero_customize_register($wp_customize)
{
    // add section
    $wp_customize->add_section("hero", [
        "title" => __("Hero image"),
        "description" => __("change image d'en tête"),
        "priority" => 26
    ]);

    // title setting
    $wp_customize->add_setting("hero_title", [
        "default" => __("hano ny kidipotaka"),
        "type" => "theme_mod"
    ]);
    // title control
    $wp_customize->add_control("hero_title", [
        "label" => __("Titre du image"),
        "section" => "hero",
        "priority" => 1
    ]);

    // description setting
    $wp_customize->add_setting("hero_description", [
        "default" => __("lorem description"),
        "type" => "theme_mod"
    ]);
    // descripition control
    $wp_customize->add_control("hero_description", [
        "label" => __("Description du image"),
        "section" => "hero",
        "priority" => 2
    ]);

    // button setting
    $wp_customize->add_setting("hero_button", [
        "default" => __("lorem button"),
        "type" => "theme_mod"
    ]);
    // button control
    $wp_customize->add_control("hero_button", [
        "label" => __("bouton du hero"),
        "section" => "hero",
        "priority" => 3
    ]);
    // button link setting
    $wp_customize->add_setting("hero_link", [
        "default" => __("#"),
        "type" => "theme_mod"
    ]);
    // button link control
    $wp_customize->add_control("hero_link", [
        "label" => __("lien du hero"),
        "section" => "hero",
        "priority" => 4
    ]);


    // image setting
    $wp_customize->add_setting("hero_image", [
        "default" => get_template_directory_uri() . "/assets/img/hero-bg.jpg",
        "type" => "theme_mod"
    ]);
    // the image control
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'hero_image',
            array(
                'label'      => __('Image du hero', 'best'),
                'section'    => 'hero',
                'setting'   => 'hero_image'
            )
        )
    );
}
add_action('customize_register', 'hero_customize_register');
