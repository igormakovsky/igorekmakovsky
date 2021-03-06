<?php
$id = 'cherry';
$parent = 'content';
$color = 'ce5261';
$title_ru = 'Вишня';
$title_en = 'Cherry';
$description_ru = '29×21см — акварель — 1990';
$description_en = '29×21cm — watercolors — 1990';
$keywords_ru = 'вишня, косточка';
$keywords_en = 'cherry, stone';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section class="picture" style="margin-top:6rem; width:75%;">

        <div class="center">
            <img src="img/cherry.jpg" srcset="img/cherry@2x.jpg 2x">
        </div>

    </section>

    <section class="text" style="margin-bottom:10rem;">

        <h2 lang="ru">Вишня</h2>
        <h2 lang="en">Cherry</h2>
        <p lang="ru">29×21см
            <br>акварель
            <br>1990</p>
        <p lang="en">29×21cm
            <br>watercolors
            <br>1990</p>

    </section>

    <?php require $docroot.'includes/bottom.php'; ?>