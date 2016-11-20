<?php
$id = 'annual';
$parent = 'content';
$color = 'b05e63';
$title_ru = 'Годовой отчет';
$title_en = 'Annual report';
$description_ru = '29×21см — шариковая ручка, карандаш — 1990';
$description_en = '29×21cm — ballpen, pencil — 1990';
$keywords_ru = 'годовой, отчет, финансы, бухгалтерия, бабушка';
$keywords_en = 'annual, report, finance, accountant, grandmother';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section style="margin-top:10rem;">

        <div class="center">
            <img src="img/annual.jpg" srcset="img/annual@2x.jpg 2x">
        </div>

    </section>
    
    <section class="text" style="margin:4rem auto 8rem;">
        
        <h2>
            <span lang="ru">Годовой отчет</span>
            <span lang="en">Annual report</span>
        </h2>
        
        <p>
            <span lang="ru">Помогал бабушке считать</span>
            <span lang="en">Was helping grandmother with counting</span>
        </p>

        <p>
            <span lang="ru">29×21см
                <br>шариковая ручка, карандаш
                <br>1990</span>

            <span lang="en">29×21cm
                <br>ballpen, pencil
                <br>1990</span>
        </p>
        
    </section>

    <?php require $docroot.'includes/bottom.php'; ?>