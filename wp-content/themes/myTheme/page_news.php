<?php
/*
 * Template name: Шаблон новостей
 */
?>
<?php get_header(); ?>

<article class="news">


	<?php the_title( '<h1 class="pageTitle">', '</h1>' ) ?>

	<?php
	$wp_query = new WP_Query();
	$wp_query->query( 'showposts=20' . '&paged=' . $paged );
	while ( $wp_query->have_posts() ) : $wp_query->the_post();
		?>



		<div class=" content line">
			<?php the_post_thumbnail( 'thumbnail' ) ?>
			<div class="postNews">
				<h4><?php the_title(); ?></h4>
				<span> Дата публикации :
					<?php the_date(); ?>
					<?php the_time(); ?>
				</span>
				
					<?php the_excerpt(); ?>
				
				<div class="more-box">
					<a  class="link" href="<?php the_permalink() ?>"> Просмотреть запись ... </a>
				</div>
			</div>
		</div>

	<?php endwhile; ?>

	<?php if ( $paged > 1 ) { ?>

		<nav id="nav-posts">
			<div class="prev"><?php next_posts_link( '&laquo; Previous Posts' ); ?></div>
			<div class="next"><?php previous_posts_link( 'Newer Posts &raquo;' ); ?></div>
		</nav>

	<?php } else { ?>

		<nav id="nav-posts">
			<div class="prev"><?php next_posts_link( '&laquo; Previous Posts' ); ?></div>
		</nav>

	<?php } ?>

	<?php wp_reset_postdata(); ?>

</article>

<?php get_footer(); ?>


