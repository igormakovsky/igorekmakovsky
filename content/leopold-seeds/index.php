<?php
$id = 'leopold-seeds';
$parent = 'content';
$color = 'ff4c5b';
$title_ru = 'Семена Леопольда';
$title_en = 'Leopold seeds';
$description_ru = '21×29см — цветные карандаши — 1989';
$description_en = '21×29cm — color pencils — 1989';
$keywords_ru = 'леополь, кот, дедушка, семена';
$keywords_en = 'leopold, cat, grandfather, seeds';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section class="picture" style="margin-top:9rem;">

        <div class="center">
            <img src="img/leopold-seeds-1.jpg" srcset="img/leopold-seeds-1@2x.jpg 2x">
        </div>

    </section>
        
    <section class="picture" style="margin-top:29rem;">
        
        <div class="drag" style="left:20rem; top:-23rem;">
            <figure class="rot20">
                <img src="img/leopold-candy.png" srcset="img/leopold-candy@2x.png 2x">
            </figure>
        </div>

        <div class="center">
            <img src="img/leopold-seeds-2.jpg" srcset="img/leopold-seeds-2@2x.jpg 2x">
        </div>

    </section>
    
    <section class="text" style="margin-bottom:10rem;">
        
        <h2>
            <span lang="ru">Семена Леопольда</span>
            <span lang="en">Leopold seeds</span>
        </h2>
        
        <p class="small">
            <span lang="ru">(рисунок Николая Сычева, дедушки)</span>
            <span lang="en">(drawing by Nikolay Sychev, grandfather)</span>
        </p>
        
        <p lang="ru">21×29см
            <br>цветные карандаши
            <br>1989</p>
        <p lang="en">21×29cm
            <br>color pencils
            <br>1989</p>
        
    </section>

    <?php require $docroot.'includes/bottom.php'; ?>