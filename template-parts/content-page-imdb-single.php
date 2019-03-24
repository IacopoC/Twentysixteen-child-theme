<?php
/**
 * The template used for displaying page content for single imdb movie
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php twentysixteen_post_thumbnail(); ?>

	<div class="entry-content">
        <div class="frame">
            <div class="bit-1">
                <?php echo film_search_form(); ?>
                <div class="imdb-box"></div>
            </div>

		    <?php the_content();


        include_once get_stylesheet_directory() . '/includes/imdb-main-class.php';

        $searched_id = get_query_var( 'id' );

        $imdb_main = new ImdbMain;

        $title_imdb = $imdb_main->movieId($searched_id); ?>
           <div class="bit-1">
                <h2><?php echo $title_imdb->Title; ?></h2>
           </div>
            <div class="bit-2">
                <?php if($title_imdb->Poster !== 'N/A'): ?>
                <img src="<?php echo $title_imdb->Poster; ?>">
                <?php endif; ?>
            </div>
            <div class="bit-2">
                    <p><strong>Year of release:</strong> <?php echo $title_imdb->Year;?> - <?php echo $title_imdb->Country;?>
                          <strong>Rated:</strong> <?php echo $title_imdb->Rated; ?></p>
                    <p><strong>Director:</strong> <?php echo $title_imdb->Director; ?></p>
                    <p><strong>Awards:</strong> <?php echo $title_imdb->Awards; ?></p>
                    <p><strong>Release date:</strong> <?php echo $title_imdb->Released; ?></p>
                <p><strong>Starring:</strong> <?php echo $title_imdb->Actors; ?></p>
                    <p><?php echo $title_imdb->Plot; ?></p>
                    <p><strong>Production:</strong> <?php echo $title_imdb->Production; ?></p>
                <?php if($title_imdb->imdbID !== 'N/A'): ?>
                    <p><a href="https://www.imdb.com/title/<?php echo $title_imdb->imdbID; ?>" target="_blank">ImDb movie page</a></p>
                <?php endif; ?>

                <?php if($title_imdb->Website !== 'N/A'): ?>
                    <p><a href="<?php echo $title_imdb->Website; ?>" target="_blank">Official website</a></p>
                <?php endif; ?>

                <div class="bit-3">
                    <?php if(isset($title_imdb->Ratings[0])): ?>
                    <img class="logo-reviewers" src="/wp-content/uploads/2018/12/imdb-e1525979709721.png">
                    <p><strong><?php echo $title_imdb->Ratings[0]->Source; ?> score:</strong> <?php echo $title_imdb->Ratings[0]->Value; ?></p>
                    <?php endif; ?>
                </div>
                <div class="bit-3">
                    <?php if(isset($title_imdb->Ratings[1])): ?>
                    <img class="logo-reviewers" src="/wp-content/uploads/2018/12/rotten_tomatoes.jpg">
                    <p><strong><?php echo $title_imdb->Ratings[1]->Source; ?> score:</strong> <?php echo $title_imdb->Ratings[1]->Value; ?></p>
                    <?php endif; ?>
                </div>
                <div class="bit-3">
                    <?php if(isset($title_imdb->Ratings[2])): ?>
                    <img class="logo-reviewers" src="/wp-content/uploads/2018/12/metacritic.png">
                    <p><strong><?php echo $title_imdb->Ratings[2]->Source; ?> score:</strong> <?php echo $title_imdb->Ratings[2]->Value; ?></p>
                    <?php endif; ?>
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
        </>
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
