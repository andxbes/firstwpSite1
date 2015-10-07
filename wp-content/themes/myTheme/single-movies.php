<?php
/*
 * Temolate name: Шаблон страницы фильма
 */
get_header();
?>

<?php while (have_posts()):the_post(); ?>
    <div class="container">
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-4">
                    <?php the_post_thumbnail('medium'); ?>

                </div>
                <div class="col-md-8" >
                    <h2 class="text-left titlePost"><?php the_title(); ?></h2>
                    <div class="movieInfo">

                     <!-- Display yellow stars based on rating -->
                    <strong> Rating: </strong>
                    <?php
                    $nb_stars = intval(get_post_meta(get_the_ID(), 'movie_rating', true));
                    for ($star_counter = 1; $star_counter <= 5; $star_counter++) {
                        if ($star_counter <= $nb_stars) {
                            echo '<img src="' . plugins_url('Movie-Reviews/images/yellow.png') . '" />';
                        }
                        else {
                            echo '<img src="' . plugins_url('Movie-Reviews/images/grey.png') . '" />';
                        }
                    }
                    ?>
                   <p> <?php the_taxonomies(); ?></p>

                    </div>
                    <?php the_content(); ?>



                 



                   

                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="row sidebar">
    <?php get_sidebar('actors'); ?>
            </div>
            <div class="row sidebar ">
    <?php get_sidebar('director'); ?>
            </div>
        </div>

<?php endwhile; ?>
</div>

<?php
get_footer();

