<?php
$id = 'i-am-sun';
$parent = 'content';
$color = 'b8a878';
$title_ru = 'Я — солнце';
$title_en = 'I am the sun';
$description_ru = 'Ты — сосулька';
$description_en = 'You are the icicle';
$keywords_ru = 'солнце, сосулька';
$keywords_en = 'sun, icicle';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section style="margin-top:10rem;">

        <div class="center">
            <img src="img/i-am-sun-1.jpg" srcset="img/i-am-sun-1@2x.jpg 2x">
        </div>

    </section>
        
    <section style="margin-top:19.5rem;">

        <div class="center">
            <img src="img/i-am-sun-2.jpg" srcset="img/i-am-sun-2@2x.jpg 2x">
        </div>

    </section>
        
    <section style="margin-top:16rem;">

        <div class="center">
            <img src="img/i-am-sun-3.jpg" srcset="img/i-am-sun-3@2x.jpg 2x">
        </div>

    </section>
    
    <section class="text" style="margin-bottom:12rem;">
        
        <p lang="ru">Я — солнце<br>ты — сосулька</p>
        <p lang="en">I'm the sun<br>You're the icicle</p>
        
    </section>

    <?php require $docroot.'includes/bottom.php'; ?>