<?php
$id = 'fourspreads';
$parent = 'content';
$color = 'e35656';
$title_ru = '4 разворота';
$title_en = '4 spreads';
$description_ru = '3/4 игорек 3/2 папа мама';
$description_en = '3/4 igorek 3/2 daddy mommy';
$keywords_ru = 'развороты, четыре';
$keywords_en = 'spreads, four';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section style="margin-top:13rem; margin-bottom:20rem;">

        <div id="spread-1" class="center">
            <img src="img/spread-1.jpg" srcset="img/spread-1@2x.jpg 2x">
        </div>

        <div id="spread-2" class="center">
            <img src="img/spread-2.jpg" srcset="img/spread-2@2x.jpg 2x">
        </div>

        <div id="spread-3" class="center">
            <img src="img/spread-3.jpg" srcset="img/spread-3@2x.jpg 2x">
        </div>

        <div id="spread-4" class="center">
            <img src="img/spread-4.jpg" srcset="img/spread-4@2x.jpg 2x">
        </div>

    </section>

    <?php require $docroot.'includes/bottom.php'; ?>