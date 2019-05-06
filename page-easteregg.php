<?php

/**
Template Name: Easter egg Marvel
 */

get_header(); ?>

    <div id="primary" class="content-area-imdb">
        <main id="main" class="site-main" role="main">
            <?php
            // Start the loop.
            while ( have_posts() ) : the_post();

                // Include the page content template.
                get_template_part( 'template-parts/content', 'page' ); ?>
                    <div class="duran">
                        <a onclick="myPlay()">
                            <img src="/wp-content/uploads/2019/05/rio.jpg">
                        </a>
                    </div>

                <?php
                // End of the loop.
            endwhile;
            ?>

        </main><!-- .site-main -->

    </div><!-- .content-area -->
<script>
    function myPlay(){
        var audio = new Audio("/wp-content/uploads/2019/05/banner-ragnarok.mp3");
        audio.play();
    }
</script>
<?php get_footer(); ?>