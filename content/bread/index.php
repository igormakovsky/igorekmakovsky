<?php
$id = 'bread';
$parent = 'content';
$color = '2fe2fc';
$title_ru = 'Хлеб с семенами';
$title_en = 'Bread with seeds';
$description_ru = '14×7см — шариковая ручка — 1990';
$description_en = '14×7cm — ballpen — 1990';
$keywords_ru = 'хлеб, семена, кусок';
$keywords_en = 'bread, seeds, slice';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section class="picture" style="margin-top:9rem; width:60%;">

        <div class="center">
            <img src="img/bread.jpg" srcset="img/bread@2x.jpg 2x">
        </div>

    </section>

    <section class="text" style="margin:5rem auto 11rem;">

        <h2>
            <span lang="ru">Хлеб с семенами</span>
            <span lang="en">Bread with seeds</span>
        </h2>

        <p>
            <span lang="ru">14×7см
                <br>шариковая ручка
                <br>1990</span>

            <span lang="en">14×7cm
                <br>ballpen
                <br>1990</span>
        </p>

    </section>

    <?php require $docroot.'includes/bottom.php'; ?>