<?php
/**
 * Functions.php
 * 
 * @package kaiku
 */

namespace Kaiku;


/**
 * Required files
 */
require get_theme_file_path( '/inc/includes.php' );

// Run theme supports
add_action( 'after_setup_theme', __NAMESPACE__ . '\theme_support' );