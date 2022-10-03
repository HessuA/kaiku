<?php
/**
 * Page.php
 *
 * This template displaying all pages
 * 
 * @package kaiku
 */

namespace Kaiku;

the_post();

get_header(); ?>

<main class="site-main">
    <?php
    the_content();
    ?>
</main>

<?php
get_footer();
