<?php
$id = 'orange';
$parent = 'content';
$color = 'f3763f';
$title_ru = 'Рыжий';
$title_en = 'Orange';
$description_ru = '21×29см — акварель — 1988';
$description_en = '21×29cm — watercolors — 1988';
$keywords_ru = 'рыжий, цвет, глаза, кот';
$keywords_en = 'orange, color, eyes, cat';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section class="picture" style="margin-top:6rem;">

        <div class="center">
            <img src="img/orange.jpg" srcset="img/orange@2x.jpg 2x">
        </div>

    </section>

    <section class="text" style="margin-top:4rem; margin-bottom:9rem;">

        <h2>
        <span lang="ru">Рыжий</span>
        <span lang="en">Orange</span>
        </h2>

        <p lang="ru">21×29см
            <br>акварель
            <br>1988</p>
        <p lang="en">21×29cm
            <br>watercolors
            <br>1988</p>

    </section>

    <?php require $docroot.'includes/bottom.php'; ?>