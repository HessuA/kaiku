<?php
/**
 * Site branding
 *
 * @package kaiku
 */

namespace Kaiku;

?>

<div class="site-branding">
    <p class="site-title">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <span class="screen-reader-text"><?php bloginfo( 'name' ); ?></span>
            <!-- Add your logo here /svg/logo.svg -->
            <?php include get_theme_file_path( '/svg/logo.svg' ); ?>
        </a>
    </p>
</div>