<?php
$id = 'crocodile';
$parent = 'content';
$color = 'a4b777';
$title_ru = 'Крокодил';
$title_en = 'Crocodile';
$description_ru = '11×19,5см — акварель — 1990';
$description_en = '11×19,5cm — watercolors — 1990';
$keywords_ru = 'крокодил, вода, отражение';
$keywords_en = 'crocodile, water, reflection';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

<section class="picture" style="margin-top:6rem; width:800px;">

        <div class="center">
            <img src="img/crocodile.jpg" srcset="img/crocodile@2x.jpg 2x">
        </div>

    </section>

    <section class="text" style="margin-bottom:10rem;">

        <h2 lang="ru">Крокодил</h2>
        <h2 lang="en">Crocodile</h2>
        <p lang="ru">11×19,5см
            <br>акварель
            <br>1990</p>
        <p lang="en">11×19,5cm
            <br>watercolors
            <br>1990</p>

    </section>

<?php require $docroot.'includes/bottom.php'; ?>