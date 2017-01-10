<?php
$id = 'dogs';
$parent = 'content';
$color = 'c1bdaa';
$title_ru = 'Псы';
$title_en = 'Dogs';
$description_ru = 'Я пёс, ты пёс, мы с тобою псы';
$description_en = 'I am dog, you are dog, we are dogs';
$keywords_ru = 'я, ты, мы, псы';
$keywords_en = 'i, you, we, dogs';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section style="margin-top:17rem;">

        <div class="center">
            <img src="img/dogs.jpg" srcset="img/dogs@2x.jpg 2x">
        </div>

    </section>

    <section class="text" style="margin:5rem auto 13rem;">

        <p>
            <span lang="ru">Я пёс!
                <br>Ты пёс!
                <br>Мы с тобою псы!
                <br>Я очень люблю своего внука!</span>

            <span lang="en">I am dog!
                <br>You are dog!
                <br>We are dogs!
                <br>I love my grandson very much!</span>
        </p>
        
        <p class="small emdash">
            <span lang="ru">Бабушка, Вера Ивановна</span>
            <span lang="en">Grandmother, Vera Ivanovna</span>
        </p>

    </section>

    <?php require $docroot.'includes/bottom.php'; ?>