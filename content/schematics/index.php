<?php
$id = 'schematics';
$parent = 'content';
$color = '7da59c';
$title_ru = 'Схема Леопольда';
$title_en = 'Leopold schematics';
$description_ru = '21×29см — акварель, шариковая ручка — 1990';
$description_en = '21×29cm — watercolor, ballpen — 1990';
$keywords_ru = 'леопольд, схема, кот';
$keywords_en = 'leopold, schematics, cat';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section class="picture" style="margin-top:8rem;">

        <div class="center">
            <img src="img/schematics.jpg" srcset="img/schematics@2x.jpg 2x">
        </div>

    </section>
    
    <section class="text" style="margin-top:6rem; margin-bottom:8rem;">

        <h2 lang="ru">Сама знаешь —<br>схема кота Леопольда</h2>
        <h2 lang="en">You know for yoursel — cat Leopold schematics</h2>

        <p lang="ru">21×29см
            <br>акварель, шариковая ручка
            <br>1990</p>
        <p lang="en">21×29cm
            <br>watercolor, ballpen
            <br>1990</p>

    </section>

    <?php require $docroot.'includes/bottom.php'; ?>