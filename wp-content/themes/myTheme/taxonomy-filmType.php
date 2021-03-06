
<?php
/*
 * Template name: Шаблон жанров
 */
?>
<?php get_header(); ?>

<article class="news">


    <h2 class="titleGenre"><?php the_archive_title(); ?></h2>

	<?php
	
	while (have_posts() ) : the_post();
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





