<?php

add_action('after_setup_theme', function () {

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    load_theme_textdomain('stadthund', get_template_directory() . './assets/languages');

    add_theme_support('custom-logo', [
        'height' => 60,
        'width' => 100,
        'flex-height' => true,
        'flex-width' => true,
    ]);

    add_theme_support('html5', [
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'
    ]);

    register_nav_menus([
        'primary' => __('Haupt-Navigation', 'webdev'),
        'footer' => __('Footer-Navigation', 'webdev')
    ]);

//    Backend Styling
    add_theme_support('editor-styles');
    add_editor_style('assets/css/editor-style.css');
    add_editor_style('assets/css/icons.css');
    add_editor_style('assets/css/fonts.css');


});

?>