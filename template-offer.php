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
            <article id="content" class="row pt-5 pb-5 showme">
                <div class="col-xl-12 mt-2 sheet">
                    <h1><?php the_title() ?> - Psycholog - Rzeszów</h1>
                    <?php
                    while (have_posts()) :

                        the_post();

                        get_template_part('template-parts/content', 'simple');

                    endwhile; // End of the loop.
                    ?>

                    <div class="col-12 text-center mb-4">
                        <a href="#target" class="btn btn-lg btn-primary">Skontaktuj się</a>
                    </div>
                </div>
            </article>
        </section>
    </section>
</main><!-- #main -->

<?php get_footer(); ?>
