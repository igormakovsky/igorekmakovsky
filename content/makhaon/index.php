<?php
$id = 'makhaon';
$parent = 'content';
$color = '91d152';
$title_ru = 'Махаон';
$title_en = 'Makhaon';
$description_ru = 'Высказывания Игоря';
$description_en = 'Igor`s statements';
$keywords_ru = 'махаон, бабочка, высказывание';
$keywords_en = 'makhaon, butterfly, statement';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section style="margin-top:8rem;">

        <div class="center">
            <img src="img/makhaon.jpg" srcset="img/makhaon@2x.jpg 2x">
        </div>

    </section>

    <section class="text" style="margin-bottom:10rem;">

        <h2>
            <span lang="ru">Высказывания Игоря</span>
            <span lang="en">Igor`s statements</span>
        </h2>

        <p>Я крадусь по траве, как ночь.
            <br>Большой, крылатый махаон,
            <br>Слегка пузатый,
            <br>Спящий красавец — махаон.
            <br>У меня в кармане
            <br>Сидит в пакете&hellip;
            <br>Вечером какая-то обомлевшая
            <br>ночнуха летит на меня
        </p>

        <p class="small">
            <span>1992 — «хохляк»</span>
        </p>

    </section>

    <?php require $docroot.'includes/bottom.php'; ?>