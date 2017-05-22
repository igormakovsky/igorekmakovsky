<?php
$id = 'calendar';
$parent = 'content';
$color = '54c4cc';
$title_ru = 'Календарь';
$title_en = 'Calendar';
$description_ru = 'для дачника';
$description_en = 'for the dacha owner';
$keywords_ru = 'календарь, дача, сеять, семена';
$keywords_en = 'calendar, dacha, sow, seeds';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section style="margin-top:8rem;">

        <div class="center">
            <img src="img/calendar-1.jpg" srcset="img/calendar-1@2x.jpg 2x">
        </div>

    </section>

    <section style="margin-top:10rem;">

        <div class="center">
            <img src="img/calendar-2.jpg" srcset="img/calendar-2@2x.jpg 2x">
        </div>

    </section>

    <section class="fullwidth flex-row" style="margin-top:15rem; max-width:1300px;">

        <figure><img src="img/calendar-5.jpg" srcset="img/calendar-5@2x.jpg 2x"></figure>
        
        <figure class="relate">
            <img src="img/calendar-4.jpg" srcset="img/calendar-4@2x.jpg 2x">
            <div class="drag" style="left:6rem; top:7rem;">
                <img src="img/drag-1.png" srcset="img/drag-1@2x.png 2x">
            </div>
        </figure>
        
        <figure class="relate" style="width:16rem;">
            <div class="absolute" style="left:-4rem; top:2rem;">
                <img src="img/calendar-6.jpg" srcset="img/calendar-6@2x.jpg 2x">
            </div>
        </figure>

    </section>

    <section class="text">

        <div class="drag" style="left:9rem; top:2.5rem;">
            <img src="img/drag-2.png" srcset="img/drag-2@2x.png 2x">
        </div>

        <h2>
            <span lang="ru">Как сажать?</span>
            <span lang="en">How to sow?</span>
        </h2>

        <p>
            <span lang="ru">
                Берете 8–10 метров горшок и&nbsp;насыпаете землю, сажаете и&nbsp;делаете бороздки. Сеяте, а&nbsp;потом аккуратно закрываете бороздки правельно
            </span>
            <span lang="en">
                Take 8–10 meters pallete and&nbsp;put soil and seeds into it, then making grooves. Sow seeds, and&nbsp;then carefully bury these grooves the&nbsp;right way
            </span>
        </p>

    </section>

    <section style="margin-top:9rem; margin-bottom:15rem;">

        <div class="center">
            <img src="img/calendar-3.jpg" srcset="img/calendar-3@2x.jpg 2x">
        </div>

    </section>

    <?php require $docroot.'includes/bottom.php'; ?>
