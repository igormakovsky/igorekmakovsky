<?php
$id = 'sunrise';
$parent = 'content';
$color = 'c4c2b3';
$title_ru = 'Восход на Трудовой';
$title_en = 'Sunrise in Trudovaya';
$description_ru = '21×29см — акварель — 1990';
$description_en = '21×29cm — watercolor — 1990';
$keywords_ru = 'восход, трудовая, акварель';
$keywords_en = 'sunrise, trudovaya, watercolor';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section class="picture" style="margin-top:4.5rem;">

        <div class="center">
            <img src="img/sunrise.jpg" srcset="img/sunrise@2x.jpg 2x">
        </div>

    </section>

    <section class="text" style="margin-bottom:8rem;">

        <h2 lang="ru">Восход на Трудовой</h2>
        <h2 lang="en">Sunrise in Trudovaya</h2>

        <p lang="ru">21×29см
            <br>акварель
            <br>1990</p>
        <p lang="en">21×29cm
            <br>watercolors
            <br>1990</p>

    </section>

    <?php require $docroot.'includes/bottom.php'; ?>