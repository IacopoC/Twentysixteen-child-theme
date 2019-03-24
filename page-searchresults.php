<?php 

/**
 Template Name: Search result imdb template
 */

get_header(); ?>

<?php include_once get_stylesheet_directory() . '/includes/imdb-main-class.php';

$imdb_main = new ImdbMain();
$image_attributes = wp_get_attachment_image_src(80);
$icon_movie = wp_get_attachment_image_src(20); ?>

<div id="primary" class="content-area-imdb">
	<main id="main" class="site-main" role="main">
        <div class="frame">
        <article class="imdb-search">

	<h1 class="page-title">Ricerca altri film dall'archivio <img class="imdb-logo" src="<?php echo $image_attributes[0];?>"/></h1>
     <!-- Barra di ricerca film-->
	<?php echo film_search_form(); ?>
     <!--Fine barra ricerca film-->

    <div class="imdb-box"></div>
            <?php $searched_movies = filter_input(INPUT_GET, 't', FILTER_SANITIZE_STRING);

	if (($searched_movies !=='')) {
	    $movie_imdb = $imdb_main->searchMovie($searched_movies);

	 if ( ($movie_imdb->Response == 'False' ) ) { ?>
 
        <h2 class="page-title">Nessun risultato per il termine <?php echo $searched_movies; ?></h2>
 		
 	<?php };

	 if ( ($movie_imdb->Response == 'True' ) ) { ?>

 		 <h2 class="page-title">Ricerca per il termine: <?php echo $searched_movies; ?></h2>

 			<?php	foreach ($movie_imdb->Search as $single_movie) {

 					if($single_movie->Poster == 'N/A') { ?>
            <a href="<?php echo esc_url( add_query_arg( 'id', $single_movie->imdbID, site_url( '/film/' ) ) );?>">
                <div class="result-imdb">
                    <div class="film-descr">
                        <h3><?php echo $single_movie->Title; ?></h3>
                        <p><?php echo $single_movie->Year; ?> - <?php echo $single_movie->Type; ?>  <img class="cinema-icon" src="<?php echo $icon_movie[0];?>"/></p>
                    </div>
                </div>
            </a>
 				<br>
                    <?php } else { ?>
            <a href="<?php echo esc_url( add_query_arg( 'id', $single_movie->imdbID, site_url( '/film/' )));?>">
 				<div class="result-imdb">
                    <div class="poster-box">
                        <img class="poster-img" src="<?php echo $single_movie->Poster ?>"/>
                    </div>
                    <div class="film-descr">
                        <h3><?php echo $single_movie->Title; ?></h3>
                        <p><?php echo $single_movie->Year; ?> - <?php echo $single_movie->Type; ?>  <img class="cinema-icon" src="<?php echo $icon_movie[0];?>"/></p>
                    </div>
                </div>
            </a>
 					<br>
                    <?php
 					}
 			}
            if($movie_imdb->totalResults > '10') {?>
                <div class="more-result-box"><button class="btn-more-results">Altri risultati</button></div>
                    <div id="more-results"></div>
             <?php }

 	}

 	}

 	if ( ($searched_movies == '')) { ?>
        <h2 class="page-title">Immetti un titolo di un film in inglese nel campo soprastante per effettuare una ricerca.</h2>

    <?php } ?>
        </article>
        </div>
	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_footer(); ?>