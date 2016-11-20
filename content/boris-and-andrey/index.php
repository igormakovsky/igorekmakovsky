<?php
$id = 'boris-and-andrey';
$parent = 'content';
$color = '37a269';
$title_ru = 'Боря и Андрей';
$title_en = 'Borya and Andrey';
$description_ru = '14×10см — шариковая ручка, карандаш — 1990';
$description_en = '14×10cm — ballpen, pencil — 1990';
$keywords_ru = 'боря, андрей, вертолет, рыба';
$keywords_en = 'borya, andrey, helicopter, fish';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section style="margin-top:36rem;">

        <div class="center">
            <img src="img/boris-and-andrey.jpg" srcset="img/boris-and-andrey@2x.jpg 2x">
        </div>

    </section>
    
    <section>
        
        <div class="absolute" style="left:5rem; top:-3.2rem; width:10rem;">
            <p lang="en">
                <strong>370.</strong><br>Borya has&nbsp;catched the&nbsp;fish
            </p>
        </div>
           
        <div class="absolute" style="left:31.5rem; top:2.4rem; width:10rem;">
            <p lang="en">
                <strong>363.</strong><br>Andrey is&nbsp;painting the&nbsp;helicopter<br>model
            </p>
        </div>
        
        <div class="drag" style="left:20rem; top:25rem;">
            <figure class="scale-08">
                <img src="img/drag-1.png" srcset="img/drag-1@2x.png 2x">
            </figure>
        </div>
           
        <div class="drag" style="left:-3rem; top:-53rem;">
            <figure class="scale-08">
                <img src="img/drag-3.png" srcset="img/drag-3@2x.png 2x">
            </figure>
        </div>
           
        <div class="drag" style="right:-13rem; top:-28rem;">
            <figure class="scale-08">
                <img src="img/drag-4.png" srcset="img/drag-4@2x.png 2x">
            </figure>
        </div>
           
        <div class="drag" style="right:17rem; top:-63rem;">
            <figure class="scale-08">
                <img src="img/drag-5.png" srcset="img/drag-5@2x.png 2x">
            </figure>
        </div>
           
        <div class="drag" style="right:7rem; top:7rem;">
            <figure class="scale-08">
                <img src="img/drag-6.png" srcset="img/drag-6@2x.png 2x">
            </figure>
        </div>
           
        <div class="drag" style="left:-14rem; top:-9rem;">
            <figure class="scale-08">
                <img src="img/drag-7.png" srcset="img/drag-7@2x.png 2x">
            </figure>
        </div>
           
        <!-- <div class="absolute" style="left:20rem; top:20rem;">
            <img src="img/drag-2.png" srcset="img/drag-2@2x.png 2x">
        </div> -->
        
    </section>
    
    <section class="text" style="margin:10rem auto 22rem;">

        <h2>
            <span lang="ru">Боря и Андрей</span>
            <span lang="en">Borya and Andrey</span>
        </h2>

        <p>
            <span lang="ru">14×10см
                <br>шариковая ручка, карандаш
                <br>1990</span>

            <span lang="en">14×10cm
                <br>ballpen, pencil
                <br>1990</span>
        </p>

    </section>

    <?php require $docroot.'includes/bottom.php'; ?>