<?php
$id = 'crane';
$parent = 'content';
$color = '647782';
$title_ru = 'Строительный кран';
$title_en = 'Construction crane';
$description_ru = '29×21см — цветные карандаши — 1989';
$description_en = '29×21cm — color pencil — 1989';
$keywords_ru = 'строительный, кран';
$keywords_en = 'construction, crane';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section class="picture" style="margin-top:8rem;">

        <div class="center">
            <img src="img/crane.jpg" srcset="img/crane@2x.jpg 2x">
        </div>

    </section>

    <section class="text" style="margin-top:4rem; margin-bottom:10rem;">

        <h2>
            <span lang="ru">Строительный кран</span>
            <span lang="en">Construction crane</span>
        </h2>

        <p lang="ru">29×21см
            <br>цветные карандаши
            <br>1989</p>
        <p lang="en">29×21cm
            <br>color pencil
            <br>1989</p>

    </section>

    <?php require $docroot.'includes/bottom.php'; ?>