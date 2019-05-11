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
               <div class="center">
                <div class="ruffalo">
                    <a onclick="playRuffalo()">
                    <img src="/wp-content/uploads/2019/05/mark-ruffalo.png">
                    </a>
                </div>
               </div>
                <?php
                // End of the loop.
            endwhile;
            ?>

        </main><!-- .site-main -->

    </div><!-- .content-area -->
<script>
    function playRuffalo(){
        let playruffalo = new Audio("/wp-content/uploads/2019/05/Yeah-Mark-Ruffalo-Huh.mp3");
        playruffalo.play();
    }
</script>
<?php get_footer(); ?>