<h4>Актеры:</h4>
<?php
$posts = get_field('actors');
?>
<ul style="text-align: left ;list-style: none;">
    <?php if ($posts) {
        foreach ($posts as $val): ?>
            <li> <?= $val->post_title ?> </li>     
        <?php endforeach;
    } ?>
</ul>

