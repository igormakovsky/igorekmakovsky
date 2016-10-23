<?php
$id = 'academy';
$parent = 'content';
$color = '85a596';
$title_ru = 'Домашняя академия';
$title_en = 'Housework academy';
$description_ru = 'рисунок Николая Сычева, дедушки';
$description_en = 'drawing by Nikolay Sychev, grandfather';
$keywords_ru = 'домашняя, академия, сычев, указатели';
$keywords_en = 'housework, academy, sychev, pointer';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section class="picture" style="margin-top:8rem; width:75%;">

        <div class="center">
            <img alt src="img/academy-1.jpg" srcset="img/academy-1@2x.jpg 2x">
        </div>

    </section>

    <section style="height:19rem; margin-top:5rem;">

        <div class="flex-centered">
            <div class="drag">
                <img alt src="img/academy-3.png" srcset="img/academy-3@2x.png 2x">
            </div>
        </div>

    </section>
    
    <section>
        
        <div class="drag" style="left:10; top:-5rem;">
            <figure class="rot-10">
                <img src="img/academy-4.png" srcset="img/academy-4@2x.png 2x">
            </figure>
        </div>
        
    </section>

    <section class="text">

        <p>Деревня Повёлкино
            <br>Город &rarr;
            <br>Ромашкин вокзал &rarr;</p>

    </section>

    <section class="picture" style="margin-top:5rem; width:75%;">

        <div class="center">
            <img alt src="img/academy-2.jpg" srcset="img/academy-2@2x.jpg 2x">
        </div>

    </section>

    <section class="text" style="margin-top:2rem; margin-bottom:10rem;">

        <h2>
            <span lang="ru">Домашняя академия</span>
            <span lang="en">Domiciliary academy</span>
        </h2>

        <p class="small">
            <span lang="ru">(рисунок Николая Сычева, дедушки)</span>
            <span lang="en">(drawing by Nikolay Sychev, grandfather)</span>
        </p>

        <p>
            1990
        </p>

    </section>

    <?php require $docroot.'includes/bottom.php'; ?>