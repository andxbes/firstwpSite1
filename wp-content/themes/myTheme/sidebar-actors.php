
<h4>Режисеры:</h4>

<?php
$posts = get_field('director');
?>
<ul style="text-align: left ;list-style: none;">
    <?php if ($posts) {
        foreach ($posts as $val): ?>
            <li> <?= $val->post_title ?> </li>     
        <?php endforeach;
    } ?>
</ul>