<?php
$id = 'subscription-2';
$parent = 'content';
$color = '7a8470';
$title_ru = 'Приусадебное хозяйство';
$title_en = 'Farming household';
$description_ru = '111395, Москва, улица Пчелкина, дом 10';
$description_en = '111395, Moscow, Pchelkina street, 10';
$keywords_ru = 'подписка, журнал, москва, дача, советы';
$keywords_en = 'subscription, magazine, moscow, dacha, advices';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section style="margin-top:16rem;">

        <div class="center">
            <img src="img/subscription-1.jpg" srcset="img/subscription-1@2x.jpg 2x">
        </div>

    </section>
    
    <section style="margin-top:13rem; height:37rem;">
       
       <div class="heavy absolute" style="left:10rem; top:3rem;"><img src="img/drag-1.png" srcset="img/drag-1@2x.png 2x"></div>
       <div class="heavy absolute" style="right:10rem; top:5rem;"><img src="img/drag-3.png" srcset="img/drag-3@2x.png 2x"></div>
       <div class="drag" style="left:28rem; top:0rem;"><img src="img/drag-2.png" srcset="img/drag-2@2x.png 2x"></div>
        
        <div class="absolute" style="left:14rem; top:0rem;"><img src="img/subscription-2.png" srcset="img/subscription-2@2x.png 2x"></div>
        
    </section>
    
    <section>

        <div class="center">
            <img src="img/subscription-3.jpg" srcset="img/subscription-3@2x.jpg 2x">
        </div>

    </section>
        
    <section style="margin:14rem auto 3rem;">

        <div class="center">
            <img src="img/subscription-3.jpg" srcset="img/subscription-3@2x.jpg 2x">
        </div>
        
        <div class="drag" style="left:25rem; top:18.5rem;"><img src="img/drag-4.png" srcset="img/drag-4@2x.png 2x"></div>

    </section>
    
    <section class="text" style="margin-bottom:6rem;">
        
        <h2>
            <span lang="ru">Приусадебное хозяйство</span>
            <span lang="en">Farming household</span>
        </h2>

        <p>
            <span lang="ru">111395 — Москва,
               <br>улица Пчелкина, 10
               <br>Мае и Кузе</span>
            <span lang="en">111395 — Moscow,
                <br>Pchelkina Street, 10
                <br>to Maya and Kuzya</span>
        </p>
        
    </section>

    <?php require $docroot.'includes/bottom.php'; ?>
