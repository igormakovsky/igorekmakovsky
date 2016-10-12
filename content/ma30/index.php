<?php
$id = 'ma30';
$parent = 'content';
$title_ru = 'Аудиометрический кабинет МА-30';
$title_en = 'Audiometrical cabinet MA-30';
$description_ru = 'Мама, я тебя люблю и хочу, чтобы ты никогда не болела.';
$description_en = 'Mum, I love you, and wish you never feel ill';
$keywords_ru = 'аудиометрический, мама, март, желаю';
$keywords_en = 'audiometrical, mother, march, wish';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';
?>

    <section style="height:100em;">

        <div lang="ru">
            <h1>Гомеопатическая поликлиника</h1>
            <h2>Аудиометрический кабинет МА-30</h2>
            <input title="fio">
            <p class="label">Ф. И. О.</p>
            <input>
            <p class="label">Возраст</p>
            <input type="date">
            <p class="label">Дата</p>
            <p>Кол/сек
                <br> Условные обозначения
                <br> Правое ухо-о-о-о
                <br> Левое ухо-х-х-х
                <br> Костн. пров. — — —
                <br> Воздушн. пров. —————
                <br> Подпись.
                <br> Информэлектро. Зак. 3386</p>
            <h2>8 марта</h2>
            <p>Мама, я тебя люблю
                <br> и хочу, чтобы ты никогда не болела
                <br> Еще раз поздравляю</p>
        </div>

        <div lang="en">
            <h1>Homeopathic polyclinic</h1>
            <h2>Audiometrical cabinet MA-30</h2>
            <input title="fio">
            <p class="label">Name</p>
            <input>
            <p class="label">Age</p>
            <input type="date">
            <p class="label">Date</p>
            <p>Quantity/sec
                <br> Legend
                <br> Right ear o-o-o-o
                <br> Left ear -x-x-x
                <br> Bone. test. — — —
                <br> Air. test. —————
                <br> Sign.
                <br> Informelectro. Order. 3386</p>
            <h2>8 march</h2>
            <p>Mom, I love you
                <br> and I want you never feel sick
                <br> Congratulate you once again</p>
        </div>

        <div class="drag" style="top:4em; left:3em; width:643px; height:530px;">
            <img src="img/frontside.png" srcset="img/frontside@2x.png 2x" alt="mum, I love you, and wish you never feel ill">
        </div>

        <div class="drag" style="top:5em; left:4em;">
            <img src="img/backside.png" srcset="img/backside@2x.png 2x" alt="audiometrical office MA-30"> </div>
    </section>


    <?php require $docroot.'includes/bottom.php'; ?>