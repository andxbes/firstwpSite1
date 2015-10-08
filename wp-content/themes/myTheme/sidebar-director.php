<h4 class="sidebarHeader">Режисеры:</h4>

<?php
$directors = get_field('director');
?>
<ul style="text-align: left ;list-style: none;">
    <?php if ($directors) {
        foreach ($directors as $val): ?>
            <li> <?= $val->post_title ?> </li>     
        <?php endforeach;
    } ?>
</ul>