<?php
$id = 'vishnikovskaya';
$parent = 'content';
$color = '608183';
$title_ru = 'Писаж — церковь Вишниковская';
$title_en = 'Lantscape — Vishnikovskaya church';
$description_ru = '10×15см — шариковая ручка, карандаш — 1992';
$description_en = '10×15cm — ball pen, pencils — 1992';
$keywords_ru = 'церковь, пейзаж, вешняки';
$keywords_en = 'church, landscape, veshnyaki';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section style="margin-top:21rem;">

        <div class="drag" style="right:15rem; top:-15rem;">
            <figure class="rot40">
                <img src="img/ticket-1.png" srcset="img/ticket-1@2x.png 2x">
            </figure>
        </div>
           
        <div class="drag" style="left:-8rem; top:6rem;">
            <figure class="rot10">
                <img src="img/ticket-2.png" srcset="img/ticket-2@2x.png 2x">
            </figure>
        </div>
           
        <div class="drag" style="left:-14rem; top:26rem;">
            <figure class="rot-35">
                <img src="img/ticket-3.png" srcset="img/ticket-3@2x.png 2x">
            </figure>
        </div>
           
        <div class="drag" style="left:6rem; top:54rem;">
            <figure class="rot-55">
                <img src="img/ticket-4.png" srcset="img/ticket-4@2x.png 2x">
            </figure>
        </div>
           
        <div class="drag" style="right:-8rem; top:27rem;">
            <figure class="rot20">
                <img src="img/ticket-5.png" srcset="img/ticket-5@2x.png 2x">
            </figure>
        </div>

        <div class="center">
            <img src="img/vishnikovskaya.jpg" srcset="img/vishnikovskaya@2x.jpg 2x" alt="">
        </div>

    </section>

    <section class="text" style="margin-top:4rem; margin-bottom:33rem;">

        <h2>
            <span lang="ru">Писаж — церковь Вишниковская</span>
            <span lang="en">Lantscape — Vishnikovskaya church</span>
        </h2>

        <p lang="ru">10×15см
            <br>шариковая ручка, карандаш
            <br>1992</p>
        <p lang="en">10×15cm
            <br>ball pen, pencils
            <br>1992</p>

    </section>

    <?php require $docroot.'includes/bottom.php'; ?>