<?php
$id = 'poems';
$parent = 'content';
$color = 'da31a8';
$title_ru = 'Отценка';
$title_en = 'Skore';
$description_ru = '29×21см — печатная машинка — 1993';
$description_en = '29×21cm — typewriter — 1993';
$keywords_ru = 'стихотворения, печатная машинка';
$keywords_en = 'poems, typewriter';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section class="picture" style="margin-top:8rem; margin-bottom:4rem;">

        <div class="center">
            <img src="img/poems.jpg" srcset="img/poems@2x.jpg 2x" alt>
        </div>

    </section>
    
    <section class="text" style="margin-bottom:10rem;">
        
        <h2>
            <span lang="ru">Отценка</span>
            <span lang="en">Skore</span>
        </h2>
        
        <p>
            <span lang="ru">Ребята, как вы думаете, какая отценка?</span>
            <span lang="en">Friends, what skore is it, how do you think?</span>
        </p>
        
        <p lang="ru">29×21см
            <br>печатная машинка
            <br>1993</p>
        <p lang="en">29×21cm
            <br>typewriter
            <br>1993</p>
        
    </section>

    <?php require $docroot.'includes/bottom.php'; ?>