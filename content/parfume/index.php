<?php
$id = 'parfume';
$parent = 'content';
$color = 'c4c2b3';
$title_ru = 'Мамины духи';
$title_en = 'Mother`s parfume';
$description_ru = '21×29см — акварель, шариковая ручка, фломастер — 1990';
$description_en = '21×29cm — watercolors, ballpen, feltpen — 1990';
$keywords_ru = 'мама, духи, запах';
$keywords_en = 'mother, parfume, smell';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section class="picture" style="margin-top:7rem;">

        <div class="center">
            <img src="img/parfume.jpg" srcset="img/parfume@2x.jpg 2x">
        </div>

    </section>
    
    <section class="text" style="margin-bottom:6rem; margin-top:2rem;">
        
        <h2 lang="ru">Мамины духи</h2>
        <h2 lang="en">Mother's parfume</h2>
        
        <p lang="ru">21×29см
            <br>акварель, шариковая ручка, фломастер
            <br>1990</p>
        <p lang="en">21×29cm
            <br>watercolors, ballpen, feltpen
            <br>1990</p>
        
    </section>

    <?php require $docroot.'includes/bottom.php'; ?>