<?php
$id = 'toilet';
$parent = 'content';
$color = 'a2d3cb';
$title_ru = 'Туалет';
$title_en = 'Toilet';
$description_ru = '29×21см — шариковая ручка — 1989';
$description_en = '29×21cm — ballpen — 1989';
$keywords_ru = 'туалет, больница, сантехника';
$keywords_en = 'toilet, hospital, sanitary';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section class="picture" style="margin-top:8.5em; width:65%;">

        <div class="center">
            <img src="img/toilet.jpg" srcset="img/toilet@2x.jpg 2x">
        </div>

    </section>
    
    <section class="text" style="margin:3.5rem auto 10rem;">
        
        <h2 lang="ru">Туалет в больнице</h2>
        <h2 lang="en">Toilet in a hospital</h2>

        <p>
            <span lang="ru">29×21см
                <br>шариковая ручка
                <br>1989</span>
            <span lang="en">29×21cm
                <br>ballpen
                <br>1989</span>
        </p>
        
    </section>

    <?php require $docroot.'includes/bottom.php'; ?>