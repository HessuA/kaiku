<?php
/**
 * Hooks
 *
 * All hooks that are run in the theme are listed here
 *
 * @package kaiku
 */
namespace Kaiku;

require get_theme_file_path( 'inc/hooks/scripts-and-styles.php' );
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_theme_scripts' );
