<?php
$id = 'flowerbed';
$parent = 'content';
$color = '747867';
$title_ru = 'Клумба';
$title_en = 'Flower bed';
$description_ru = '21×29см — акварель — 1989';
$description_en = '21×29cm — watercolors — 1989';
$keywords_ru = 'клумба, цветы';
$keywords_en = 'flowerbed, flower';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section class="picture" style="margin-top:6rem;">

        <div class="center">
            <img src="img/flowerbed.jpg" srcset="img/flowerbed@2x.jpg 2x">
        </div>

    </section>
    
    <section class="text" style="margin-bottom:10rem; margin-top:3rem;">
        
        <h2 lang="ru">Цветочная клумба</h2>
        <h2 lang="en">Flower bed</h2>
        
        <p lang="ru">21×29см
            <br>акварель
            <br>май, 1989</p>
        <p lang="en">21×29cm
            <br>watercolors
            <br>may, 1989</p>
        
    </section>

    <?php require $docroot.'includes/bottom.php'; ?>