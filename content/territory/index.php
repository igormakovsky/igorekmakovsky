<?php
$id = 'territory';
$parent = 'content';
$color = 'e2209b';
$title_ru = 'Территория';
$title_en = 'Territory';
$description_ru = '40×30см — шариковая ручка — 1991';
$description_en = '40×30cm — ballpen — 1991';
$keywords_ru = 'территория, карта, полезные ископаемые, граница, знаки';
$keywords_en = 'territory, map, minerals, border, symbols';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section class="picture" style="width:75%; margin-top:10rem;">

        <div class="center">
            <img src="img/territory.jpg" srcset="img/territory@2x.jpg 2x">
        </div>

    </section>
    
    <section class="text" style="margin:3.5rem auto 10rem;">
        
        <h2 lang="ru">Территория</h2>
        <h2 lang="en">Territory</h2>

        <p>
            <span lang="ru">40×30см
                <br>шариковая ручка
                <br>1991</span>
            <span lang="en">40×30cm
                <br>ballpen
                <br>1991</span>
        </p>
        
    </section>

    <?php require $docroot.'includes/bottom.php'; ?>