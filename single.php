<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the single post content template.
			get_template_part( 'template-parts/content', 'single' );
		
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			if ( is_singular( 'attachment' ) ) {
				// Parent post navigation.
				the_post_navigation( array(
					'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'twentysixteen' ),
				) );
			} 
		

			// End of the loop.
		endwhile;
		
			if ( is_singular( 'post' ) ) {
				

		?>
                <nav class="post-navigation">
	
		<?php // Custom loop per articoli stessa categoria
	  	$postid = get_the_ID(); 
		
		$postcat = get_the_category( $post->ID );
			
       $args = array (
    	'cat'              => $postcat[0]->term_id,
    	'posts_per_page'         => '4',
    	'orderby'                => 'ID',
		'post__not_in'  =>array($postid)
	   );
		
		$custom_query = new WP_Query($args); 
					
			while($custom_query->have_posts()) : $custom_query->the_post(); ?>
                <span class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
			<?php endwhile; 
		wp_reset_postdata(); 
		
		// Fine custom loop
		
		?>
		</nav>		
	<?php } ?>
	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
