
<?php
/**
 */
get_header();
?>

<div id="primary" class="fullscrtoWidth">
	<div class="baseSize content arrow_box" >

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
		the_title('<h3 class="title">','</h3>');
		// Include the page content template.
		the_content('<div class="content box-array">','</div>');

		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
		comments_template();
		endif;

		// End the loop.
		endwhile;
		?>

	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>


