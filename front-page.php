<?php get_header(); ?>

<main>
  <section class="container-fluid hero position-relative">
    <section class="container position-relative">
      <article class="hero-text row justify-content-center align-items-center">
        <?php dynamic_sidebar('quote-hero-sidebar'); ?>
      </article>
      <a href="#target" class="scroll"><span></span></a>
      <a href="#target" class="arrows">
        <span></span>
        <span></span>
        <span></span>
      </a>
    </section>
  </section>
  <section class="container-fluid description">
    <section class="container">
      <article id="content" class="row pt-5 pb-5">
        <div class="col-xl-12 description-text hideme">
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
</main>

<?php get_footer(); ?>