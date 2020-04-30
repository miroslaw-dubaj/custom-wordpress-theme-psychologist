<?php

/**
 * Template Name: About Page
 *
 */

get_header();
?>

<main id="main" class="site-main">
    <div class="container-fluid description">
        <div class="container">
            <article id="content" class="row pt-5 pb-5">
                <section class="col-md-8 showme">
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
                    <article class="card text-center">
                        <img class="card-img-top" src="<?php echo $url ?>" alt="Card image cap">
                        <main class="card-body">
                            <h5 class="card-title">mgr Marzena Małgorzata Kwasik</h5>
                            <p class="card-text">Celem Centrum jest budowanie relacji opartej na wzajemnym dialogu na uważnym słuchaniu pacjenta i&nbsp;proponowaniu rozwiązań z&nbsp;wykorzystaniem wieloletniego doświadczenia klinicznego.</p>
                            <a href="#target" class="btn btn-lg btn-primary">Skontaktuj się</a>
                        </main>
                    </article>
                </aside>
            </article>
        </div>
    </div>
</main><!-- #main -->

<?php get_footer(); ?>
