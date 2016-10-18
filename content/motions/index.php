<?php
$id = 'motions';
$parent = 'content';
$color = '4b76b6';
$title_ru = 'Моции';
$title_en = 'Motions';
$description_ru = '21×25см — шариковая ручка, фломастер — 1990';
$description_en = '21×25cm — ballpen, feltpen — 1990';
$keywords_ru = 'моции';
$keywords_en = 'motions';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section class="picture" style="margin-top:8rem; width:70%;">

        <div class="center">
            <img src="img/motions.jpg" srcset="img/motions@2x.jpg 2x">
        </div>

    </section>

    <section class="text" style="margin-top:4rem; margin-bottom:9rem;">

        <h2>
        <span lang="ru">Моции</span>
        <span lang="en">Motions</span>
        </h2>

        <p lang="ru">21×25см
            <br>шариковая ручка, фломастер
            <br>1990</p>
        <p lang="en">21×25cm
            <br>ballpen, feltpen
            <br>1990</p>

    </section>

    <?php require $docroot.'includes/bottom.php'; ?>