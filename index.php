<?php
$id = 'igorekmakovsky';
$title_ru = 'Игорёк Маковский';
$title_en = 'Igorek Makovsky';
$description_ru = 'Архив работ 1988–1993 года, каждая из которых создавалсь с надеждой, что мама, папа или бабушка с дедом не заметят разницы между серъезными позднесоветскими изданиями и тем, что издавал я';
$description_en = 'Archive of works 1988–1993 years, each of which was created with a hope, that my mother, dad or grandparents will not notice the difference between serious editions of the late soviet era and those published by me';
$keywords_ru = 'официальный, общая, главная, оглавление';
$keywords_en = 'official, general, main, contents';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';
?>
    <?php require $docroot.'includes/contents.php'; ?>


        <section class="contents">

            <footer>
                <h1>
<span lang="ru">Игорёк Маковский</span>
<span lang="en">Igorek Makovsky</span>
</h1>

                <p lang="ru">
                    <?=$description_ru?>
                        <br> — Игорь Маковский
                </p>

                <p lang="en">
                    <?=$description_en?>
                        <br> — Igor Makovsky
                </p>

                <ul>

                    <li>
                        <a href="mailto:igor@igormakovsky.ru">
                            <span lang="ru">почта</span>
                            <span lang="en">mail</span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <span lang="ru">инстаграм</span>
                            <span lang="en">instagram</span>
                        </a>
                    </li>

                    <li>
                        <a href="https://www.facebook.com/igor.makovsky">
                            <span lang="ru">фб</span>
                            <span lang="en">fb</span>
                        </a>
                    </li>

                    <li>
                        <a href="<?='http://'.$switch;?>">
                            <span lang="ru">in english</span>
                            <span lang="en">на русском</span>
                        </a>
                    </li>

                </ul>
                <ul>

                    <li>
                        <span lang="ru"><a href="http://igormakovsky.ru">igormakovsky.ru</a></span>
                        <span lang="en"><a href="http://igormakovsky.com">igormakovsky.com</a></span>
                    </li>

                    <li>
                        <span lang="ru"><a href="http://frosyathecat.ru">frosyathecat.ru</a></span>
                        <span lang="en"><a href="http://frosyathecat.com">frosyathecat.com</a></span>
                    </li>

                    <li>
                        <span lang="ru"><a href="http://dizzystories.ru">dizzystories.ru</a></span>
                        <span lang="en"><a href="http://dizzystories.com">dizzystories.com</a></span>
                    </li>

                </ul>

            </footer>

        </section>



        <?php require $docroot.'includes/bottom.php'; ?>