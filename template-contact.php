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
            <article id="content" class="row pt-5 pb-5 ">
                <section class="col-md-6 col-lg-8 contact mb-5 order-md-1 showme">
                    <h1><?php the_title() ?></h1>

                    <?php
                    while (have_posts()) :

                        the_post();

                        get_template_part('template-parts/content', 'simple');

                        $url = get_the_post_thumbnail_url();

                    endwhile; // End of the loop.
                    ?>
                </section>
                <aside class="col-md-6 col-lg-4 sheet mb-5 order-md-2 order-first">
                    <img class="img-thumbnail mb-4" src="<?php echo $url ?>" alt="Card image cap">
                    <h4>Centrum Diagnozy i&nbsp;Terapii Marzena&nbsp;Kwasik</h4>
                    <a class="nav-link" href="https://goo.gl/maps/dTQCH5SPMDRyp7aM7" target="_blank" data-toggle="tooltip" data-placement="left" title="Adres">ul.&nbsp;Al.&nbsp;Piłsudskiego&nbsp;31, I&nbsp;piętro, Gabinet&nbsp;108 35-074,&nbsp;Rzeszów</a>
                    <a class="nav-link" href="tel:+48510079794" data-toggle="tooltip" data-placement="left" title="Numer telefonu">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone-call">
                            <path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                        <span>+48 510 079 794</span>
                    </a>
                    <a class="nav-link" href="mailto:marzenakwasik@gmail.com" data-toggle="tooltip" data-placement="left" title="Email">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                        <span>marzenakwasik@gmail.com</span></a>
                    <a class="nav-link" href="skype:marzenakwasik?call" data-toggle="tooltip" data-placement="left" title="Skype">
                        <svg width="24px" height="24px" viewBox="0 0 61 61" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <!-- Generator: Sketch 46.2 (44496) - http://www.bohemiancoding.com/sketch -->
                            <title>Shape</title>
                            <desc>Created with Sketch.</desc>
                            <defs></defs>
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Logo" transform="translate(-1.000000, 0.000000)" fill-rule="nonzero" fill="#0078D7">
                                    <path d="M31.32,48.65 C21.23,48.65 16.62,43.51 16.62,39.74 C16.6186363,38.8406349 16.9877508,37.9804106 17.6404989,37.361719 C18.2932469,36.7430274 19.1719976,36.4204926 20.07,36.47 C24.39,36.47 23.26,42.95 31.32,42.95 C35.44,42.95 37.86,40.47 37.86,38.14 C37.86,36.74 37.06,35.14 34.34,34.5 L25.34,32.23 C18.11,30.39 16.85,26.37 16.85,22.64 C16.85,14.9 23.93,12.1 30.67,12.1 C36.88,12.1 44.26,15.53 44.26,20.17 C44.26,22.17 42.59,23.24 40.65,23.24 C36.96,23.24 37.58,18.06 30.16,18.06 C26.47,18.06 24.53,19.79 24.53,22.21 C24.53,24.63 27.4,25.45 29.92,26 L36.56,27.5 C43.84,29.14 45.78,33.41 45.78,37.5 C45.78,43.79 40.91,48.65 31.31,48.65 M59.18,35.34 C59.4682444,33.6889808 59.6121215,32.0159907 59.61,30.34 C59.645297,21.9211208 55.9461253,13.919872 49.509629,8.49306008 C43.0731327,3.06624813 34.5618239,0.772457691 26.27,2.23 C23.7213908,0.762631477 20.8308393,-0.00657256608 17.89,-8.8817842e-16 C11.8535995,0.0368750438 6.28948144,3.27207159 3.27129746,8.4998872 C0.253113478,13.7277028 0.233588823,20.1639692 3.22,25.41 C1.55360499,34.5663392 4.47263239,43.9586886 11.035525,50.5574658 C17.5984176,57.156243 26.9747103,60.1264421 36.14,58.51 C38.6854907,59.9761092 41.572489,60.7452856 44.51,60.74 C50.5433302,60.701132 56.1040397,57.4673111 59.1215855,52.2426578 C62.1391312,47.0180046 62.161362,40.5853851 59.18,35.34" id="Shape"></path>
                                </g>
                            </g>
                        </svg>
                        <span>marzenakwasik</span>
                    </a>
                    <h5 class="mt-4 mb-3">Sieci społecznościowe</h5>
                    <?php dynamic_sidebar('sidebar-1'); ?>
                </aside>
            </article>
            <section class="row">
                <article class="copyright col-lg-12 text-center">
                    <p>&#169; 2020 Centrum Diagnozy i Terapii – Marzena Kwasik
                        <span class="sep"> | </span>
                        Strona stworzona przez <a href="https://dubaj.dev/">dubaj.dev</a>
                    </p>
                </article>
            </section>
        </div>
    </div>
</main><!-- #main -->

<script src="https://code.jquery.com/jquery-3.5.0.min.js" crossorigin="anonymous"></script>
<?php wp_footer(); ?>
</body>

</html>