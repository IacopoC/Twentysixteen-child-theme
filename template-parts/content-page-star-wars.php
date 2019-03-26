<?php
/**
 * The template used for displaying page content imdb
 *
 */

include_once get_stylesheet_directory() . '/includes/imdb-main-class.php';

$imdb_main = new ImdbMain;

$spinoff1 = $imdb_main->movieTitle('rogue one');
$spinoff2 = $imdb_main->movieTitle('solo: a star wars story');

$sequel_episode3 = $imdb_main->movieTitle('episode ix');
$sequel_episode2 = $imdb_main->movieTitle('the last jedi');
$sequel_episode1 = $imdb_main->movieTitle('the force awakens');

$original3 = $imdb_main->movieTitle('return of the jedi');
$original2 = $imdb_main->movieTitle('empire strikes back');
$original1 = $imdb_main->movieTitle('star wars');

$prequel_episode3 = $imdb_main->movieTitle('revenge of the sith');
$prequel_episode2 = $imdb_main->movieTitle('episode II');
$prequel_episode1 = $imdb_main->movieTitle('episode I');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php twentysixteen_post_thumbnail(); ?>

	<div class="entry-content">
		<?php the_content(); ?>

  <h2>Spin off</h2>
   <div class="container-sequel">
        <div class="item">
	        <img src="<?php echo $spinoff2->Poster; ?>" alt="<?php echo $spinoff2->Title; ?>">
		<h3 class="titolo-film"><?php echo $spinoff2->Title; ?></h3>
		<p><strong><?php echo $spinoff2->Director; ?> - <?php echo $spinoff2->Year; ?> <?php echo $spinoff2->Country; ?></strong></p>
	   <p><a href="/api-search/film/?id=<?php echo $spinoff2->imdbID; ?>">Scheda film</a></p>
        </div>

       <div class="item">
        <img src="<?php echo $spinoff1->Poster; ?>" alt="<?php echo $spinoff1->Title; ?>">
		<h3 class="titolo-film"><?php echo $spinoff1->Title; ?></h3>
		<p><strong><?php echo $spinoff1->Director; ?> - <?php echo $spinoff1->Year; ?> <?php echo $spinoff2->Country; ?></strong></p>
           <p><a href="/api-search/film/?id=<?php echo $spinoff1->imdbID; ?>">Scheda film</a></p>
       </div>

	    <div class="item">
		</div>
	</div>

   <div class="scrollme">
   <h2>Trilogia sequel( 2015-2019 )</h2>
    <div class="container-sequel animateme"  data-from="1" data-when="enter" data-to="0" data-opacity="0" easing="easein" data-translatex="200">
        <div class="item">
            <img src="<?php echo $sequel_episode3->Poster; ?>" alt="<?php echo $sequel_episode3->Title; ?>">
            <h3 class="titolo-film"><?php echo $sequel_episode3->Title; ?></h3>
            <p><strong><?php echo $sequel_episode3->Director; ?> - <?php echo $sequel_episode3->Year; ?></strong></p>
            <p><a href="/api-search/film/?id=<?php echo $sequel_episode3->imdbID; ?>">Scheda film</a></p>
        </div>

       <div class="item">
        <img src="<?php echo $sequel_episode2->Poster; ?>" alt="<?php echo $sequel_episode2->Title; ?>">
		<h3 class="titolo-film"><?php echo $sequel_episode2->Title; ?></h3>
		<p><strong><?php echo $sequel_episode2->Director; ?> - <?php echo $sequel_episode2->Year; ?></strong></p>
           <p><a href="/api-search/film/?id=<?php echo $sequel_episode2->imdbID; ?>">Scheda film</a></p>
	   </div>

	   <div class="item">
        <img src="<?php echo $sequel_episode1->Poster; ?>" alt="<?php echo $sequel_episode1->Title; ?>">
		<h3 class="titolo-film"><?php echo $sequel_episode1->Title; ?></h3>
		<p><strong><?php echo $sequel_episode1->Director; ?> - <?php echo $sequel_episode1->Year; ?></strong></p>
           <p><a href="/api-search/film/?id=<?php echo $sequel_episode1->imdbID; ?>">Scheda film</a></p>
       </div>

	    <div class="item">
		</div>
	</div>
   </div>

        <div class="scrollme">
    <h2>Trilogia originale (1977-1983)</h2>
    <div class="container-original animateme" data-from="1" data-when="enter" data-to="0" data-opacity="0" easing="easein" data-translatex="200">
	    <div class="item">
        <img src="<?php echo $original3->Poster; ?>" alt="<?php echo $original3->Title; ?>">
		<h3 class="titolo-film"><?php echo $original3->Title; ?></h3>
			<p><strong><?php echo $original3->Director; ?> - <?php echo $original3->Year; ?></strong></p>
            <p><a href="/api-search/film/?id=<?php echo $original3->imdbID; ?>">Scheda film</a></p>
	   </div>
	    <div class="item">
        <img src="<?php echo $original2->Poster; ?>" alt="<?php echo $original2->Title; ?>">
		<h3 class="titolo-film"><?php echo $original2->Title; ?></h3>
			<p><strong><?php echo $original2->Director; ?> - <?php echo $original2->Year; ?></strong></p>
            <p><a href="/api-search/film/?id=<?php echo $original2->imdbID; ?>">Scheda film</a></p>
	   </div>
	    <div class="item">
        <img src="<?php echo $original1->Poster; ?>" alt="<?php echo $original1->Title; ?>">
		<h3 class="titolo-film"><?php echo $original1->Title; ?></h3>
			<p><strong><?php echo $original1->Director; ?> - <?php echo $original1->Year; ?></strong></p>
            <p><a href="/api-search/film/?id=<?php echo $original1->imdbID; ?>">Scheda film</a></p>
	   </div>
	</div>
        </div>

   <div class="scrollme">
   <h2>Trilogia prequel (1999-2005)</h2>
    <div class="container-prequels animateme" data-from="1" data-when="enter" data-to="0" data-opacity="0" easing="easein" data-translatex="200">

        <div class="item">
        <img src="<?php echo $prequel_episode3->Poster; ?>" alt="<?php echo $prequel_episode3->Title; ?>">
		<h3 class="titolo-film"><?php echo $prequel_episode3->Title; ?></h3>
		<p><strong><?php echo $prequel_episode3->Director; ?> - <?php echo $prequel_episode3->Year; ?></strong></p>
            <p><a href="/api-search/film/?id=<?php echo $prequel_episode3->imdbID; ?>">Scheda film</a></p>
        </div>

	   <div class="item">
        <img src="<?php echo $prequel_episode2->Poster; ?>" alt="<?php echo $prequel_episode2->Title; ?>">
		<h3 class="titolo-film"><?php echo $prequel_episode2->Title; ?></h3>
		<p><strong><?php echo $prequel_episode2->Director; ?> - <?php echo $prequel_episode2->Year; ?></strong></p>
           <p><a href="/api-search/film/?id=<?php echo $prequel_episode2->imdbID; ?>">Scheda film</a></p>
       </div>

       <div class="item">
        <img src="<?php echo $prequel_episode1->Poster; ?>" alt="<?php echo $prequel_episode1->Title; ?>">
		<h3 class="titolo-film"><?php echo $prequel_episode1->Title; ?></h3>
		<p><strong><?php echo $prequel_episode1->Director; ?> - <?php echo $prequel_episode1->Year; ?></strong></p>
           <p><a href="/api-search/film/?id=<?php echo $prequel_episode1->imdbID; ?>">Scheda film</a></p>
       </div>
	</div>
   </div>
	
<?php
		wp_link_pages( array(
			'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
			'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
			'separator'   => '<span class="screen-reader-text">, </span>',
		) );
		?>
	</div><!-- .entry-content -->

	<?php
		edit_post_link(
			sprintf(
				/* translators: %s: Name of current post */
				__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
				get_the_title()
			),
			'<footer class="entry-footer"><span class="edit-link">',
			'</span></footer><!-- .entry-footer -->'
		);
	?>

</article><!-- #post-## -->
