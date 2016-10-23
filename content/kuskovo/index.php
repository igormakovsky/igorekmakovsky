<?php
$id = 'kuskovo';
$parent = 'content';
$color = '428b7d';
$title_ru = 'Кусково';
$title_en = 'Kuskovo';
$description_ru = '21×29см — акварель — 1989';
$description_en = '21×29cm — watercolor — 1989';
$keywords_ru = 'кусково, парк, лес';
$keywords_en = 'kuskovo, park, forest';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section class="picture" style="margin-top:8rem;">

        <div class="center">
            <img src="img/forest.jpg" srcset="img/forest@2x.jpg 2x">
        </div>

    </section>
    
    <section class="text" style="margin-bottom:10rem;">
        
        <h2>
            <span lang="ru">Кусково</span>
            <span lang="en">Kuskovo</span>
        </h2>
        
        <p lang="ru">21×29см
            <br>акварель
            <br>1989</p>
        <p lang="en">21×29cm
            <br>watercolor
            <br>1989</p>
        
    </section>

    <?php require $docroot.'includes/bottom.php'; ?>