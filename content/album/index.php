<?php
$id = 'album';
$parent = 'content';
$color = 'df2f7e';
$title_ru = 'Надпись в альбом';
$title_en = 'Writing in album';
$description_ru = 'Марина Цветаева. 1909 — 1910';
$description_en = 'Marina Tsvetaeva. 1909 — 1910';
$keywords_ru = 'цветаева, марина, стих, печатная машинка';
$keywords_en = 'tsvetaeva, marina, poem, typewriter';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section style="margin-top:9rem;">

        <div class="center">
            <img src="img/album.jpg" srcset="img/album@2x.jpg 2x">
        </div>

    </section>

    <section class="text" style="margin:6rem auto 11rem;">

        <h2>
            <span lang="ru">Надпись в альбом</span>
            <span lang="en">Writing in album</span>
        </h2>
        
        <p class="small">
            <span lang="ru">Марина Цветаева</span>
            <span lang="en">Marina Tsvetaeva</span>
        </p>

        <p style="margin-top:3rem;">
            Пусть я лишь стих в твоем альбоме,
            <br>Едва поющий, как родник;
            <br>(Ты стал мне лучшею из книг,
            <br>А их немало в старом доме!)
        </p>

        <p>
            Пусть я лишь стебель, в светлый миг
            <br>Тобой, жалеющим, не смятый;
            <br>(Ты для меня цветник богатый,
            <br>Благоухающий цветник!)
        </p>

        <p>
            Пусть так. Но вот в полуистоме
            <br>Ты над страничкою поник&hellip;
            <br>Ты вспомнишь всe&hellip; Ты сдержишь крик.
            <br>— Пусть я лишь стих в твоем альбоме!
        </p>
        
        <p class="small">
            1909 — 1910
        </p>

    </section>

    <?php require $docroot.'includes/bottom.php'; ?>