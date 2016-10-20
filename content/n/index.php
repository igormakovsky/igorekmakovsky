<?php
$id = 'n';
$parent = 'content';
$color = 'e39159';
$title_ru = 'N';
$title_en = 'N';
$description_ru = '21×29см — акварель, шариковая ручка — 1989';
$description_en = '21×29cm — watercolors, ballpen — 1989';
$keywords_ru = 'n, буква, карточка, две, большая, маленькая';
$keywords_en = 'n, letter, card, two, big, small';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section class="picture" style="margin-top:8rem;">

        <div class="center">
            <img src="img/n.jpg" srcset="img/n@2x.jpg 2x">
        </div>

    </section>

    <section class="text" style="margin-top:4.5rem; margin-bottom:10rem;">

        <h2 lang="ru">N</h2>
        <h2 lang="en">N</h2>

        <p>
            <span lang="ru">Это буквы N на карточке.<br>Большая и маленькая</span>
            <span lang="en">These are N letters on cards.<br>Big one and the small one</span>
        </p>

        <p lang="ru">21×29см
            <br>акварель, шариковая ручка
            <br>1989</p>
        <p lang="en">21×29cm
            <br>watercolors, ballpen
            <br>1989</p>

    </section>

    <?php require $docroot.'includes/bottom.php'; ?>