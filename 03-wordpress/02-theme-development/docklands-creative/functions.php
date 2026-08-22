<?php

function docklands_creative_enqueue_styles() {
    wp_enqueue_style(
        'docklands-creative-style',
        get_stylesheet_uri(),
        array(),
        '1.0'
    );
}

add_action('wp_enqueue_scripts', 'docklands_creative_enqueue_styles');