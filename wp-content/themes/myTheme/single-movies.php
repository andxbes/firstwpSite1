<?php
/*
 * Temolate name: Шаблон страницы фильма
 */
$raiting = getRaiting(get_the_ID());
$percentRaiting = $raiting != 0 ? $raiting * 100 / 5 : 0;
$T_P = get_template_directory_uri();
$filmId = get_the_ID();
get_header();
?>

<script>
    var admin_ajax = '<?= admin_url('admin-ajax.php') ?>';
    var filmId = '<?= $filmId ?>';
</script>    
<script src='<?= $T_P ?>/js/raiting.js'></script>


<?php while (have_posts()):the_post(); ?>
    <div class="container">
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-4">
                    <?php the_post_thumbnail('medium'); ?>

                </div>
                <div class="col-md-8" >
                    <h2 class="text-left titlePost"><?php the_title(); ?></h2>
                    
                    <div class=" raiting col-md-5 col-sm-5">
                        <div>Рейтинг :</div> 
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" 
                                 aria-valuenow="<?= $percentRaiting ?>" 
                                 aria-valuemin="0" aria-valuemax="100" 
                                 style="width: <?= $percentRaiting ?>%;">
                                     <?= $raiting ?>
                            </div>
                        </div>
                    </div>
                    <div class="movieInfo"><br/>



                        <p> <?php the_taxonomies(); ?></p>

                    </div>
                    <?php the_content(); ?>


                    <div class="input-group col-md-3 col-md-offset-4 col-sm-3 col-sm-offset-4 " >
                       <!--<input type="text" class="form-control">-->
                        <select id="raiting" class="form-control">
                            <?php for ($i = 1; $i <= 5; $i++): ?>
                                <option value="<?= $i ?>"><?= $i ?></option>>
                            <?php endfor; ?>
                        </select>

                        <span class="input-group-btn">
                            <button class="btn btn-default"  id="send_raiting" type="button">Оценить</button>
                        </span>
                    </div><!-- /input-group -->
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

