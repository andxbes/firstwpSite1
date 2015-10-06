<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
get_header();
the_post();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">


		<div class = "container">
			<?php the_title( "<h1>", "</h1>" ); ?>
			<?php the_post_thumbnail( 'large' ); ?>

			<?php the_content(); ?>

		</div>

		<?php
		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
		?>

		<div class = "container">
			<div class="row">
				<div class="col-md-12">
				<?php
				// Previous/next post navigation.
				the_post_navigation( array(
					'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
					'<span class="post-title">%title</span>',
					'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
					'<span class="post-title">%title</span>',
				) );

				// End the loop.
				?>
				</div>
			</div>
		</div>
</div>
</main><!-- .site-main -->
</div><!-- .content-area -->


<?php get_footer(); ?>
