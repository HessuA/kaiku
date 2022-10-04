<?php
/**
 * Theme setup
 *
 * @package kaiku
 */

namespace Kaiku;


/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function theme_support() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'html5',
    array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'script',
        'style',
        )
    );
}
