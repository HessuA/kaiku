<?php
/**
 * This template displaying all single posts
 *
 * @package kaiku
 */

namespace kaiku;

the_post();
get_header();
?>

<main class="site-main">

    <div class="container">
        <article class="article-content">

            <h1><?php the_title(); ?></h1>

            <?php the_content(); ?>

            <?php the_post_navigation(
                array(
                    'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Edellinen:', 'kaiku' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Seuraava:', 'kaiku' ) . '</span> <span class="nav-title">%title</span>',
                )
            ); ?>

        </article>
    </div>

</main>

<?php
get_footer();
