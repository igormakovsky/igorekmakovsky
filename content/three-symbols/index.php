<?php
$id = 'three-symbols';
$parent = 'content';
$color = 'eb5395';
$title_ru = 'Три символа';
$title_en = 'Three symbols';
$description_ru = '21×29см — шариковая ручка, акварель, фломастер — 1990';
$description_en = '21×29cm — ballpen, watercolor, feltpen — 1990';
$keywords_ru = 'скрипичный ключ, басовый ключ, знак семян, символы, три';
$keywords_en = 'treble clef, bass clef, seeds, three, symbols';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section class="picture" style="margin-top:7.5rem; width:68%;">

        <div class="center">
            <img src="img/three-symbols.jpg" srcset="img/three-symbols@2x.jpg 2x">
        </div>

    </section>
    
    <section class="text" style="margin:4.5rem auto 10rem;">
        
        <h2>
            <span lang="ru">Три символа</span>
            <span lang="en">Three symbols</span>
        </h2>

       <p class="small">
           <span lang="ru">Скрипичный ключ, басовый ключ, знак «семена»</span>
           <span lang="en">Treble clef, bass clef, &#8220;seeds&#8221; symbol</span>
       </p>
       
        <p>
            <span lang="ru">21×29см
                <br>шариковая ручка, акварель, фломастер
                <br>1990</span>
            <span lang="en">21×29cm
                <br>ballpen, watercolor, feltpen
                <br>1990</span>
        </p>
        
    </section>

    <?php require $docroot.'includes/bottom.php'; ?>