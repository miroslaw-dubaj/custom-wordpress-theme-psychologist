<?php get_header(); ?>

<main>
  <section class="container-fluid hero">
    <section class="container">
      <article class="hero-text row justify-content-center align-items-center">
        <div class="col-xl-10 col-lg-10 col-md-9 col-sm-9 col-xs-8">
          <h2 class="quote-text quote-text--hero text-center">Wierzę, że człowiek może zmieniać się i&nbsp;nie&nbsp;ustawać w&nbsp;przemianie tak długo, jak żyje</h2>
          <h4 class="quote-author--hero text-right mt-3 mb-5">Karen Horney</h4>
          <p class="text-center"><a href="#bottom" class="btn btn-primary btn-lg mt-5">Zapraszam do kontaktu</a></p>
        </div>
      </article>
      <a href="#bottom" class="scroll"><span></span></a>
    </section>
    <a href="#bottom" class="arrows">
      <span></span>
      <span></span>
      <span></span>
    </a>
  </section>
  <section class="container-fluid description">
    <section class="container">
      <article id="content" class="row pt-5 pb-5">
        <div class="col-xl-12">
          <?php the_content(); ?>
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
  <div id="bottom"></div>
</main>

<?php get_footer(); ?>