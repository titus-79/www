<?php

add_action( 'wp_enqueue_scripts', 'bbq_enqueue_styles' );

function bbq_enqueue_styles() {
wp_enqueue_style(
'bbq-style',
get_stylesheet_uri()
);
}