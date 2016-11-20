<?php
$id = 'star';
$parent = 'content';
$color = '86718a';
$title_ru = 'Звезда';
$title_en = 'Star';
$description_ru = '21×29см — акварель, шариковая ручка — 1989';
$description_en = '21×29cm — watercolors, ballpen — 1989';
$keywords_ru = 'звезда, елка, рождество, фигура';
$keywords_en = 'star, firtree, christmas, figure';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section class="picture" style="margin-top:8rem; width:75%;">

        <div class="center">
            <img src="img/star.jpg" srcset="img/star@2x.jpg 2x">
        </div>

    </section>
    
    <section class="text" style="margin:4rem auto 10rem;">
        
        <h2 lang="ru">Звезда</h2>
        <h2 lang="en">Star</h2>
        
        <p>
            <span lang="ru">На елку. Настоящую, не игрушечную</span>
            <span lang="en">On the fir-tree. Real one, not the toy</span>
        </p>
        
        <p>
            <span lang="ru">21×29см
                <br>акварель, шариковая ручка
                <br>1989</span>
            <span lang="en">21×29cm
                <br>watercolors, ballpen
                <br>1989</span>
        </p>
        
    </section>

    <?php require $docroot.'includes/bottom.php'; ?>