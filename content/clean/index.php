<?php
$id = 'clean';
$parent = 'content';
$color = 'e77100';
$title_ru = 'Логотип уборочной компании';
$title_en = 'Cleaning company logo';
$description_ru = '21×29см — шариковая ручка, карандаш — 1990';
$description_en = '21×29cm — ballpen, pencil — 1990';
$keywords_ru = 'логотип, фирменный стиль, уборка, улицы';
$keywords_en = 'logo, corporate style, identity, cleaning, streets';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section class="picture" style="margin-top:7rem;">

        <div class="center">
            <img src="img/clean.jpg" srcset="img/clean@2x.jpg 2x">
        </div>

    </section>
    
    <section class="text" style="margin-bottom:8rem; margin-top:4rem;">
        
        <h2 lang="ru">Логотип уборочной компании</h2>
        <h2 lang="en">Cleaning company logo</h2>
        
        <p lang="ru">21×29см
            <br>шариковая ручка, карандаш
            <br>~1990</p>
        <p lang="en">21×29cm
            <br>ballpen, pencil
            <br>~1990</p>
        
    </section>

    <?php require $docroot.'includes/bottom.php'; ?>