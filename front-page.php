<?php
/**
 * This template displaying front page.
 *
 * @package kaiku
 */

namespace Kaiku;

get_header();
?>

<main>
    <?php
    the_content();
    ?>
</main>

<?php
get_footer();
