<?php
$id = 'charcoal';
$parent = 'content';
$color = '91894f';
$title_ru = 'Таблетки угольки';
$title_en = 'Charcoal pills';
$description_ru = '21×29см — акварель, шариковая ручка — 1990';
$description_en = '21×29cm — watercolor, ballpen — 1990';
$keywords_ru = 'уголь, таблетки, натюрморт';
$keywords_en = 'charcoal, pills, still-life';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section class="picture" style="margin-top:8rem;">

        <div class="center">
            <img src="img/charcoal.jpg" srcset="img/charcoal@2x.jpg 2x">
        </div>

    </section>

    <section class="text" style="margin-top:6rem; margin-bottom:12rem;">

        <h2 lang="ru">Таблетки угольки</h2>
        <h2 lang="en">Charcoal pills</h2>

        <p lang="ru">21×29см
            <br>акварель, шариковая ручка
            <br>1990</p>
        <p lang="en">21×29cm
            <br>watercolor, ballpen
            <br>1990</p>

    </section>

    <?php require $docroot.'includes/bottom.php'; ?>