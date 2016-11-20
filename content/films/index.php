<?php
$id = 'films';
$parent = 'content';
$color = 'ea0f88';
$title_ru = 'Кинопленки';
$title_en = 'Films';
$description_ru = '20×20см — шариковая ручка — 1990';
$description_en = '20×20cm — ballpen — 1990';
$keywords_ru = 'кинопленка, фильм, винил, мелодия';
$keywords_en = 'film, video, vinyl, melody';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section style="height:50rem;">

        <div id="vinyl-spinner" class="spin" style="left:12rem; top:15rem;">
            <figure id="vinyl" class="rotates">
                <img src="img/vinyl.png" srcset="img/vinyl@2x.png 2x">
            </figure>
        </div>
        
        <div class="absolute transparent" style="right:-7rem; top:-3rem;">
            <figure class="rot-20">
                <img src="img/box-1.png" srcset="img/box-1@2x.png 2x">
            </figure>
        </div>
           
        <div class="absolute transparent" style="left:-8rem; top:60rem; z-index:1;">
            <figure class="rot25">
                <img src="img/box-2.png" srcset="img/box-2@2x.png 2x">
            </figure>
        </div>
           
        <div class="absolute transparent" style="right:0rem; top:70rem; z-index:1;">
            <figure class="rot-10">
                <img src="img/box-3.png" srcset="img/box-3@2x.png 2x">
            </figure>
        </div>

    </section>
    
    <section class="text" style="height:30rem;">
        
        <h2>
            <span lang="ru">Мелодия</span>
            <span lang="en">Melody</span>
        </h2>
        
        <p>
            <span lang="ru">20×20см
                <br>шариковая ручка
                <br>1990</span>
            <span lang="en">20×20cm
                <br>ballpen
                <br>1990</span>
        </p>
        
    </section>

    <?php require $docroot.'includes/bottom.php'; ?>