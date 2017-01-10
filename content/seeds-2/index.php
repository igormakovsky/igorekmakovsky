<?php
$id = 'seeds-2';
$parent = 'content';
$color = 'ff0096';
$title_ru = 'Семена не понятно чего';
$title_en = 'Seeds of who knows what';
$description_ru = '83×29см — цветной карандаш, шариковая ручка — 1990';
$description_en = '83×29cm — colored pencil, ballpen — 1990';
$keywords_ru = 'семена, свиток, подборка';
$keywords_en = 'seeds, scroll, selection';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section style="margin-top:10rem;">

        <div class="center">
            <img src="img/seeds.jpg" srcset="img/seeds@2x.jpg 2x">
        </div>

    </section>
    
    <section>
        
        <div class="drag" style="left:14rem; top:5rem;">
            <figure class="rot5">
                <img src="img/drag-0.png" srcset="img/drag-0@2x.png 2x">
            </figure>
        </div>
        
    </section>
    
    <section class="text" style="margin:6rem auto 18rem;">

        <h2 lang="ru">Семена не понятно чего</h2>
        <h2 lang="en">Seeds of who knows what</h2>

        <p lang="ru">83×29см
            <br>цветной карандаш, шариковая ручка
            <br>1990</p>
        <p lang="en">83×29cm
            <br>colored pencil, ballpen
            <br>1990</p>

    </section>

    <?php require $docroot.'includes/bottom.php'; ?>