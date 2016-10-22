<?php
$id = 'telegraph';
$parent = 'content';
$color = '2475a4';
$title_ru = 'Телеграфные столбы';
$title_en = 'Telegraph poles';
$description_ru = '21×29см — шариковая ручка — 1990';
$description_en = '21×29cm — ballpen — 1990';
$keywords_ru = 'телеграф, столбы, снег, поле';
$keywords_en = 'telegraph, poles, snow, field';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section class="picture" style="margin-top:8rem;">

        <div class="center">
            <img src="img/telegraph.jpg" srcset="img/telegraph@2x.jpg 2x">
        </div>

    </section>
    
    <section class="text" style="margin-top:3.5rem; margin-bottom:7.5rem;">
        
        <h2 lang="ru">Телеграфные столбы</h2>
        <h2 lang="en">Telegraph poles</h2>

        <p lang="ru">21×29см
            <br>шариковая ручка
            <br>1990</p>
        <p lang="en">21×29cm
            <br>ballpen
            <br>1990</p>
        
    </section>

    <?php require $docroot.'includes/bottom.php'; ?>