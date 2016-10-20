<?php
$id = 'nautilus-and-me';
$parent = 'content';
$color = '336765';
$title_ru = 'Наутилус и я';
$title_en = 'Nautilus and me';
$description_ru = '21×29см — акварель, шариковая ручка — 1990';
$description_en = '21×29cm — watercolors, ballpen — 1990';
$keywords_ru = 'наутилус, я';
$keywords_en = 'nautilus, me';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section class="picture" style="margin-top:6.5rem;">

        <div class="center">
            <img src="img/nautilus-and-me.jpg" srcset="img/nautilus-and-me@2x.jpg 2x">
        </div>

    </section>
    
    <section class="text" style="margin-top:3.5rem; margin-bottom:7.5rem;">
        
        <h2 lang="ru">Наутилус и я</h2>
        <h2 lang="en">Nautilus and me</h2>

        <p lang="ru">21×29см
            <br>акварель, шариковая ручка
            <br>1990</p>
        <p lang="en">21×29cm
            <br>watercolors, ballpen
            <br>1990</p>
        
    </section>

    <?php require $docroot.'includes/bottom.php'; ?>