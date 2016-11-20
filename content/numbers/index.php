<?php
$id = 'numbers';
$parent = 'content';
$color = '0735fc';
$title_ru = 'Цифры';
$title_en = 'Numbers';
$description_ru = '21×29см — шариковая ручка — 1990';
$description_en = '21×29cm — ballpen — 1990';
$keywords_ru = 'цифры, числа, счет';
$keywords_en = 'numbers, digits, count';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section class="picture" style="width:80%; margin-top:7.5rem;">

        <div class="center">
            <img src="img/numbers.jpg" srcset="img/numbers@2x.jpg 2x">
        </div>

    </section>

    <section class="text" style="margin:3.5rem auto 8rem;">

        <h2>
        <span lang="ru">Цифры</span>
        <span lang="en">Numbers</span>
        </h2>

        <p>
            <span lang="ru">21×29см
                <br>шариковая ручка
                <br>1990</span>
            <span lang="en">21×29cm
                <br>ballpen
                <br>1990</span>
        </p>

    </section>

    <?php require $docroot.'includes/bottom.php'; ?>