<?php
get_header(); ?>

    <section id="primary" class="content-area col-sm-12 col-md-12 col-lg-8">
        <div id="main" class="site-main" role="main">

            <?php woocommerce_content(); ?>

        </div><!-- #main -->
    </section><!-- #primary -->

<?php
get_sidebar();
get_footer();
