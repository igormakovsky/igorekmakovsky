<?php
$id = 'kranty';
$parent = 'content';
$color = 'ba9c50';
$title_ru = 'Кранты';
$title_en = 'Kranty';
$description_ru = '13×10см — шариковая ручка — 1991';
$description_en = '13×10cm — ballpen — 1991';
$keywords_ru = 'кранты, октябрь, 1991';
$keywords_en = 'kranty, october, 1991';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section style="margin-top:7.5rem;">

        <div class="center">
            <img src="img/kranty.jpg" srcset="img/kranty@2x.jpg 2x">
        </div>

    </section>
    
    <section class="text" style="margin-bottom:7rem; margin-top:2rem;">
        
        <h2 lang="ru">Кранты</h2>
        <h2 lang="en">Kranty</h2>

        <p lang="ru">13×10см
            <br>шариковая ручка
            <br>1991</p>
        <p lang="en">13×10cm
            <br>ballpen
            <br>1991</p>
        
    </section>

    <?php require $docroot.'includes/bottom.php'; ?>