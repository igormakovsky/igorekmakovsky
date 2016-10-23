<?php
$id = 'pidestal';
$parent = 'content';
$color = 'a3af91';
$title_ru = 'Пистамент';
$title_en = 'Pidestal';
$description_ru = '29×21см — акварель, шариковая ручка — 1989';
$description_en = '29×21cm — watercolor, ball pen — 1989';
$keywords_ru = 'постамент, решетка';
$keywords_en = 'pedestal, grate';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section class="picture" style="margin-top:8rem;">

        <div class="center">
            <img src="img/pidestal.jpg" srcset="img/pidestal@2x.jpg 2x">
        </div>

    </section>

    <section class="text" style="margin-top:4rem; margin-bottom:10rem;">

        <h2>
            <span lang="ru">Пистамент</span>
            <span lang="en">Pidestal</span>
        </h2>

        <p>
            <span lang="ru">Это решетка на постаменте <span class="small">(пистаменте)</span></span>
            <span lang="en">This is a grate on the pedestal <span class="small">(pidestal)</span></span>
        </p>

        <p lang="ru">29×21см
            <br>акварель, шариковая ручка
            <br>1989</p>
        <p lang="en">29×21cm
            <br>watercolor, ball pen
            <br>1989</p>

    </section>

    <?php require $docroot.'includes/bottom.php'; ?>