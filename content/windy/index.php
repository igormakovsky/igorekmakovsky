<?php
$id = 'windy';
$parent = 'content';
$color = '384a47';
$title_ru = 'Ветрено';
$title_en = 'Windy';
$description_ru = '29×21см — акварель — 1989';
$description_en = '29×21cm — watercolor — 1989';
$keywords_ru = 'ветер, дерево';
$keywords_en = 'wind, tree';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section class="picture" style="margin-top:8rem;">

        <div class="center">
            <img src="img/windy.jpg" srcset="img/windy@2x.jpg 2x">
        </div>

    </section>
    
    <section class="text" style="margin-bottom:10rem;">
        
        <h2>
            <span lang="ru">Ветрено</span>
            <span lang="en">Windy</span>
        </h2>
        
        <p lang="ru">29×21см
            <br>акварель
            <br>1989</p>
        <p lang="en">29×21cm
            <br>watercolor
            <br>1989</p>
        
    </section>

    <?php require $docroot.'includes/bottom.php'; ?>