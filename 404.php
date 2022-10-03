<?php
/**
 * This template displaying 404 pages (not found).
 *
 * @package kaiku
 */

namespace Kaiku;

get_header();
?>

<main>

    <div class="container">

        <h1 id="content">404<span class="screen-reader-text"><?php esc_html_e( 'Sivua ei löytynyt', 'kaiku' ) ?></span></h1>
        <h2 aria-hidden="true"><?php esc_html_e( 'Sivua ei löytynyt', 'kaiku' ); ?></h2>
        <p><?php esc_html_e( 'Sivu voi olla poistettu tai osoite on väärä', 'kaiku' ); ?></p>

    </div>

</main>

<?php
get_footer();