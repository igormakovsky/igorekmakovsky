<?php
$id = 'bass';
$parent = 'content';
$color = '4f5391';
$title_ru = 'Басовый ключ';
$title_en = 'Bass key';
$description_ru = '29×21см — акварель, шариковая ручка, фломастер — 1990';
$description_en = '29×21cm — watercolors, ballpen, feltpen — 1990';
$keywords_ru = 'басс, музыка, ноты, знак';
$keywords_en = 'bass, music, notes, sign';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section class="picture" style="width:75%; margin-top:7rem;">

        <div class="center">
            <img src="img/bass.jpg" srcset="img/bass@2x.jpg 2x">
        </div>

    </section>
    
    <section class="text" style="margin-bottom:8rem; margin-top:2rem;">
        
        <h2 lang="ru">Басовый ключ</h2>
        <h2 lang="en">Bass key</h2>
        
        <p lang="ru">29×21см
            <br>акварель, шариковая ручка, фломастер
            <br>1990</p>
        <p lang="en">29×21cm
            <br>watercolors, ballpen, feltpen
            <br>1990</p>
        
    </section>

    <?php require $docroot.'includes/bottom.php'; ?>