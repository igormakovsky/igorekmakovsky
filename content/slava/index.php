<?php
$id = 'slava';
$parent = 'content';
$color = 'febc2e';
$title_ru = 'Слава';
$title_en = 'Slava';
$description_ru = 'Пропуск на садоводческое товарищество — участок №';
$description_en = 'Passcard to the gardening association — site #';
$keywords_ru = 'дача, слава, товарищество, участок, 6 соток, лето, карта, схема';
$keywords_en = 'dacha, slava, association, site, 6 acres, summer, map, schematic';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section class="fullwidth" style="max-width:1400px; margin-top:6rem;">

        <div class="center">
            <img style="width:85%;" src="img/slava.jpg" srcset="img/slava@2x.jpg 2x">
        </div>

    </section>

    <section>

        <div class="drag" style="top:3rem; left:19rem;">
            <img src="img/drag.png" srcset="img/drag@2x.png 2x">
        </div>

    </section>
    
    <section class="text" style="margin:4rem auto 11rem;">
        
        <h2>
            <span lang="ru">Карта садовых товариществ</span>
            <span lang="en">Gardening association map</span>
        </h2>

        <p>
            <span lang="ru">21×29см
                <br>шариковая ручка
                <br>1993</span>
            <span lang="en">21×29cm
                <br>ballpen
                <br>1993</span>
        </p>
        
    </section>

    <?php require $docroot.'includes/bottom.php'; ?>
