<?php
/**
 * Header
 *
 * @package kaiku
 */

namespace Kaiku;

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a href="#content" class="screen-reader-text skip-link"><?php esc_html_e( 'Siirry sisältöön', 'kaiku' ); ?></a>

<div class="site" id="page">

    <div class="nav-container">
        <header class="site-header">

            <?php get_template_part( 'template-parts/header/branding' ); ?>

        </header>
    </div>

</div>