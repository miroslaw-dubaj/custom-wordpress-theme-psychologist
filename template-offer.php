<?php

/**
 * Template Name: Offer Page
 *
 */

get_header();
?>

<main id="main" class="site-main">
    <section class="container-fluid description">
        <section class="container">
            <article id="content" class="row pt-5 pb-5">
                <div class="col-xl-12">
                    <h1><?php the_title() ?></h1>

                    <?php
                    while (have_posts()) :

                        the_post();

                        get_template_part('template-parts/content', 'simple');

                    endwhile; // End of the loop.
                    ?>
                </div>
            </article>
        </section>
    </section>
</main><!-- #main -->

<?php
get_footer();
