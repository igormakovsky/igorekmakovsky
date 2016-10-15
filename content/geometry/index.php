<?php
$id = 'geometry';
$parent = 'content';
$color = '8dcfbb';
$title_ru = 'Английский изучитель языка геометрии';
$title_en = 'English learnitator of geometry language';
$description_ru = 'Ты тоже нарисуй точь в точь';
$description_en = 'You should draw it exactly right to the point too';
$keywords_ru = 'английский, изучитель, язык, геометрия';
$keywords_en = 'english, learnitator, language, geometry';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';
?>

    <section class="text" style="height:30rem; margin-top:10rem;">
        <h2>
            <span lang="ru">Английский изучитель<br>Язык геометрии</span>
            <span lang="en">English learnitator<br>of geometry language</span>
       </h2>
        <p>
            <span lang="ru">Первый павильон</span>
            <span lang="en">First pavilion</span>
        </p>
    </section>

    <section style="height:45em;">
      
      <div class="drag absolute" style="left:5em; top:-30rem;">
            <img src="img/officer-ruler.png" srcset="img/officer-ruler@2x.png 2x" alt="typical officer ruler">
        </div>
       
        <div class="center">
            <img id="front-cover" src="img/geometry-1.jpg" srcset="img/geometry-1@2x.jpg 2x" alt="English learnitator cover">
        </div>
    </section>

    <section>
        <div class="center">
            <img id="dots" src="img/geometry-2.jpg" srcset="img/geometry-2@2x.jpg 2x" alt="You should draw it exactly right to the point too">
        </div>
    </section>

    <section class="text">
        <p>
            <span lang="ru">Ты тоже нарисуй точь в точь</span>
            <span lang="en">Draw it exactly point by point too</span>
        </p>
    </section>

    <section style="margin-top:10em;">
        <div class="center">
            <img id="forest" src="img/geometry-3.jpg" srcset="img/geometry-3@2x.jpg 2x" alt="Try to draw forest yourself">
        </div>
    </section>

    <section class="text">
        <p>
            <span lang="ru">Попробуй и ты нарисовать «лес»</span>
            <span lang="en">Try to picture the &#8220;forest&#8221; yourself</span>
        </p>
    </section>

    <section style="margin-top:15em;">
        <div class="center">
            <img id="credits" src="img/geometry-4.jpg" srcset="img/geometry-4@2x.jpg 2x" alt="Credits of the english learnitator of the geometry language, volume one">
        </div>
    </section>

    <section class="text" style="margin-bottom:13rem;">
        <p>
            <span lang="ru">Старый Гай, СССР, Москва<br>
Книга №1, 20 страниц. 1993<br>
Английский изучитель<br>
геометрического языка,<br>
первый том</span>

            <span lang="en">
                    
                    Staryi Gai, USSR, Moscow<br>
Book #1, 20 pages, 1993<br>
English learnitator<br>
of the geometrical language,<br>
first volume
                    
                </span>
        </p>
    </section>

    <section style="margin-bottom:5em;">
        <div class="center">
            <img id="contents-this" src="img/geometry-5.jpg" srcset="img/geometry-5@2x.jpg 2x" alt="">
        </div>
    </section>

    <section class="text" style="height:30em;">

        <ul class="small" lang="ru">
            <li>1 — линии, точки</li>
            <li>4 — углы</li>
            <li>11 — круг</li>
            <li>15 — сантиметр, метр, километр</li>
            <li>20 — оглавление</li>
        </ul>

        <ul class="small" lang="en">
            <li>1 — lines, points</li>
            <li>4 — corners</li>
            <li>11 — circle</li>
            <li>15 — centimeter, meter, kilometer</li>
            <li>20 — contents</li>
        </ul>

        <p lang="ru">Вот и закончилась геометрия
            <br>Теперь тебя ждет математика
            <br>Но человечки останутся</p>

        <p lang="en">That is the end of the geometry
            <br>Now the math awaits you
            <br>But the little fellows shall stay</p>

        <h1 lang="ru">Пока!!?</h1>
        <h1 lang="en">Bye!!?</h1>

    </section>

    <section style="height:100em;">

        <div id="legenda-1" class="drag">
            <img class="touch" src="img/legenda-1.png" srcset="img/legenda-1@2x.png 2x">
        </div>

        <div id="legenda-2" class="drag">
            <img class="touch" src="img/legenda-2.png" srcset="img/legenda-2@2x.png 2x">
        </div>

    </section>


    <?php require $docroot.'includes/bottom.php'; ?>