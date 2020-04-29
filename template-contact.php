<?php

/**
 * Template Name: Contact Page
 *
 */

get_header();
?>

<main id="main" class="site-main">
    <div class="container-fluid description">
        <div class="container">
            <article id="content" class="row pt-5 pb-5">
                <section class="col-md-8">
                    <h1><?php the_title() ?></h1>

                    <?php
                    while (have_posts()) :

                        the_post();

                        get_template_part('template-parts/content', 'simple');

                        $url = get_the_post_thumbnail_url();

                    endwhile; // End of the loop.
                    ?>
                </section>
                <aside class="col-md-4">

                </aside>
            </article>
        </div>
    </div>
</main><!-- #main -->

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<?php wp_footer(); ?>
</body>
</html>