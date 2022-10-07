<?php
/**
 * Enqueue scripts and styles
 *
 * @package kaiku
 */

namespace Kaiku;

/**
 * Enqueuq scripts and styles
 */
function enqueue_theme_scripts() {
    // Enqueue global.css
    wp_enqueue_style( 'styles', get_theme_file_uri( '/assets/build/css/global.css' ), [] );
}
