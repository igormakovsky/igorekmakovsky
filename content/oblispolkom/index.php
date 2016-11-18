<?php
$id = 'oblispolkom';
$parent = 'content';
$color = 'd9b173';
$title_ru = 'Облисполком';
$title_en = 'Oblispolkom';
$description_ru = '8×17см — шариковая ручка, карандаш — 1991';
$description_en = '8×17cm — ballpen, pencil — 1991';
$keywords_ru = 'исполком, высказывание, бля';
$keywords_en = 'ispolkom, speach, blya';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>
    
    <section style="height:7rem;">
        
        <div class="drag" style="left:24rem; top:12rem;">
            <img src="img/drag-1.png" srcset="img/drag-1@2x.png 2x">
        </div>
        
    </section>

    <section style="margin-top:10rem;">

        <div class="center">
            <img src="img/ispolkom.jpg" srcset="img/ispolkom@2x.jpg 2x">
        </div>

    </section>
    
    <section class="text" style="margin-top:6rem; margin-bottom:9rem;">

        <h2>
        <span lang="ru">О — бля! — исполком</span>
        <span lang="en">O — blya! — ispolkom</span>
        </h2>

        <p lang="ru">8×17см
            <br>шариковая ручка, карандаш
            <br>~1991</p>
        <p lang="en">8×17cm
            <br>ballpen, pencil
            <br>~1991</p>

    </section>

    <?php require $docroot.'includes/bottom.php'; ?>