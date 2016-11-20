<?php
$id = 'square';
$parent = 'content';
$color = 'e11a57';
$title_ru = 'Квадратная карта';
$title_en = 'Square map';
$description_ru = '21×21см — шариковая ручка — 1991';
$description_en = '21×21cm — ballpen — 1991';
$keywords_ru = 'карта, квадрат';
$keywords_en = 'map, square';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

<section class="picture" style="margin-top:8rem; width:70%;">

<div class="center">
    <img src="img/square-1.jpg" srcset="img/square-1@2x.jpg 2x">
</div>

</section>

<section class="text" style="margin-bottom:9rem; margin-top:2rem;">
        
        <h2 lang="ru">Квадратная карта</h2>
        <h2 lang="en">Square map</h2>
        
        <p lang="ru">21×21см
            <br>шариковая ручка
            <br>1991</p>
        <p lang="en">21×21cm
            <br>ballpen
            <br>1991</p>
        
    </section>

<?php require $docroot.'includes/bottom.php'; ?>