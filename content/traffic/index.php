<?php
$id = 'traffic';
$parent = 'content';
$color = 'e37495';
$title_ru = 'Светофор';
$title_en = 'Traffic light';
$description_ru = '29×21см — акварель, шариковая ручка — 1990';
$description_en = '29×21cm — watercolors, ballpen — 1990';
$keywords_ru = 'светофор, дорога, красный, желтый, зеленый';
$keywords_en = 'traffic light, road, red, white, green';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section style="margin-top:8rem;">

        <div class="center">
            <img src="img/traffic.jpg" srcset="img/traffic@2x.jpg 2x">
        </div>

    </section>

    <section class="text" style="margin:3.5rem auto 10rem;">

        <h2>
            <span lang="ru">Светофор</span>
            <span lang="en">Traffic light</span>
        </h2>

        <p>
            <span lang="ru">29×21см
                <br>акварель, шариковая ручка
                <br>1990</span>
            <span lang="en">29×21cm
                <br>watercolors, ballpen
                <br>1990</span>
        </p>

    </section>

    <?php require $docroot.'includes/bottom.php'; ?>