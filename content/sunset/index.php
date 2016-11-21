<?php
$id = 'sunset';
$parent = 'content';
$color = 'e66274';
$title_ru = 'Закат в поле';
$title_en = 'Sunset out in the field';
$description_ru = '21×29см — шариковая ручка, акварель — ~1989';
$description_en = '21×29cm — ballpen, watercolor — ~1989';
$keywords_ru = 'закат, солнце, лэп, поле, трудовая';
$keywords_en = 'sunset, sun, power lines, field, trudovaya';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section class="picture" style="margin-top:7rem; width:70%;">

        <div class="center">
            <img src="img/sunset-1.jpg" srcset="img/sunset-1@2x.jpg 2x">
        </div>

    </section>

    <section class="picture" style="margin-top:5rem; width:70%;">

        <div class="center">
            <img src="img/sunset-2.jpg" srcset="img/sunset-2@2x.jpg 2x">
        </div>

    </section>
    
    <section class="text" style="margin:3rem auto 7rem;">
        
        <h2 lang="ru">Закат в поле на Трудовой</h2>
        <h2 lang="en">Sunset in Trudovaya field</h2>
        
        <p lang="ru">21×29см
            <br>шариковая ручка, акварель
            <br>~1989</p>
        <p lang="en">21×29cm
            <br>ballpen, watercolor
            <br>~1989</p>
        
    </section>

    <?php require $docroot.'includes/bottom.php'; ?>