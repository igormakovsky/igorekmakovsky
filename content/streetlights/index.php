<?php
$id = 'streetlights';
$parent = 'content';
$color = '454361';
$title_ru = 'Фонари';
$title_en = 'Streetlights';
$description_ru = '14×21см — шариковая ручка — 1990';
$description_en = '14×21cm — ballpen — 1990';
$keywords_ru = 'улица, фонари, свет, москва';
$keywords_en = 'street, streetlights, light, moscow';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section class="picture" style="margin-top:9rem; width:45%;">

        <div class="center">
            <img src="img/streetlights.jpg" srcset="img/streetlights@2x.jpg 2x">
        </div>

    </section>
    
    <section class="text" style="margin-bottom:8rem; margin-top:4rem;">
        
        <h2 lang="ru">Фонари</h2>
        <h2 lang="en">Streetlights</h2>
        
        <p lang="ru">14×21см
            <br>шариковая ручка
            <br>~1990</p>
        <p lang="en">14×21cm
            <br>ballpen
            <br>~1990</p>
        
    </section>

    <?php require $docroot.'includes/bottom.php'; ?>