<?php
$id = 'perspective';
$parent = 'content';
$color = '428598';
$title_ru = 'Перспектива';
$title_en = 'Perspective';
$description_ru = '21×29см — шариковая ручка — 1990';
$description_en = '21×29cm — ballpen — 1990';
$keywords_ru = 'перспектива, поле, снег, столбы, провода, ветер, обрыв';
$keywords_en = 'perspective, field, snow, poles, wires, wind, break';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section class="picture">

        <div class="center" style="margin-top:10rem;">
            <img src="img/perspective.jpg" srcset="img/perspective@2x.jpg 2x">
        </div>

    </section>
    
    <section class="text" style="margin-top:4rem; margin-bottom:8rem;">

        <h2>
            <span lang="ru">Перспектива</span>
            <span lang="en">Perspective</span>
        </h2>

        <p lang="ru">21×29см
            <br>шариковая ручка
            <br>1990</p>
        <p lang="en">21×29cm
            <br>ballpen
            <br>1990</p>

    </section>

    <?php require $docroot.'includes/bottom.php'; ?>