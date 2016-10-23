<?php
$id = 'tv';
$parent = 'content';
$color = 'ff5a6d';
$title_ru = 'Дедушкин телевизор всегда ломается';
$title_en = 'Grandfather`s tv breaks often';
$description_ru = '21×29см — акварель, шариковая ручка, фломастер — 1990';
$description_en = '21×29cm — watercolor, ball pen, felt pen — 1990';
$keywords_ru = 'телевизор, дедушка, поломка, экран';
$keywords_en = 'tv, grandfather, break, screen';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section class="picture" style="margin-top:8rem;">

        <div class="center">
            <img src="img/tv.jpg" srcset="img/tv@2x.jpg 2x">
        </div>

    </section>
    
    <section class="text" style="margin-top:4rem; margin-bottom:10rem;">

        <h2>
            <span lang="ru">Дедушкин телевизор всегда ломается</span>
            <span lang="en">Grandfather`s tv breaks often</span>
        </h2>

        <p lang="ru">21×29см
            <br>акварель, шариковая ручка, фломастер
            <br>1990</p>
        <p lang="en">21×29cm
            <br>watercolor, ball pen, felt pen
            <br>1990</p>

    </section>

    <?php require $docroot.'includes/bottom.php'; ?>