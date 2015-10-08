<h4 class="sidebarHeader">Актеры:</h4>
<?php
$actors = get_field('actors');
?>
<ul style="text-align: left ;list-style: none;">
    <?php if ($actors) {
        foreach ($actors as $val): ?>
            <li> <?= $val->post_title ?> </li>     
        <?php endforeach;
    } ?>
</ul>