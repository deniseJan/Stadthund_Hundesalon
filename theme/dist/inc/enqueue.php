<?php

// CSS
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('fonts-style', get_template_directory_uri() . '/assets/css/fonts.css');
    wp_enqueue_style('webdev-style', get_template_directory_uri() . '/style.css');

    //    JS
    wp_enqueue_script('webdev-script', get_template_directory_uri() . '/assets/js/scripts.js',[], ver: '1.0',args:true);

// Splide.js
    wp_register_style('splide-style', get_template_directory_uri() . '/assets/css/splide.min.css');
    wp_register_script('splide-script', get_template_directory_uri() . '/assets/js/splide.min.js',[], ver: '4.1.3',args:true);

    wp_register_script('slider-script', get_template_directory_uri() . '/assets/js/slider.js',['splide-script'], ver: '1.0',args:true);

});

    ?>