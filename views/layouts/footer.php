<?php

use yii\helpers\Url;

?>
<!-- footer -->
<div class="footer">
    <div class="w3layouts-main-footer">
        <div class="col-md-2 col-sm-4 col-xs-6 w3_footer_grid">
            <h3>Для дома</h3>
            <ul class="w3_footer_grid_list">
                <li><a href="<?= Url::to(['/site/about'])?>">О нас</a></li><br>
                <li><a href="#">Интернет</a></li><br>
                <li><a href="#">Видеоконтроль</a></li><br>
                <li><a href="#">Технические работы</a></li>
            </ul>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 w3_footer_grid">
            <h3>Сети связи</h3>
            <ul class="w3_footer_grid_list">
                <li><a href="#">Пакеты</a></li><br>
                <li><a href="#">Интернет</a></li><br>
                <li><a href="#">Телевидение</a></li><br>
                <li><a href="#">Хостинг</a></li><br>
                <li><a href="#">Умный дом</a></li>
            </ul>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 w3_footer_grid">
            <h3>Для бизнеса</h3>
            <ul class="w3_footer_grid_list">
                <li><a href="#">Телевидение</a></li><br>
                <li><a href="#">Умный дом</a></li><br>
                <li><a href="#">Видеоконтроль</a></li><br>
                <li><a href="#">Интернет</a></li><br>
                <li><a href="#">Прочие услуги</a></li>
            </ul>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 w3_footer_grid">
            <h3>Новости</h3>
            <ul class="w3_footer_grid_list">
                <li><a href="<?= Url::to(['/site/blog'])?>">Центральные новости</a></li>
                <li><a href="<?= Url::to(['/site/blog'])?>">Новости филиалов</a></li><br>
                <li><a href="#">Закупки</a></li><br>
                <li><a href="#">quick pay</a></li><br>
                <li><a href="#">Технические работы</a></li>
            </ul>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 w3_footer_grid">
            <h3>О компании</h3>
            <ul class="w3_footer_grid_list">
                <li><a href="<?= Url::to(['/site/about'])?>">Руководство</a></li><br>
                <li><a href="#">Компания</a></li><br>
                <li><a href="#">Правовая информация</a></li>
            </ul>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 w3_footer_grid">
            <h3>Обратная связь</h3>
            <ul class="w3_footer_grid_list">
                <li><a href="<?= Url::to(['/site/contact'])?>">Контакты</a></li><br>
                <li><a href="#">Пресс-центр</a></li>
                <li><a href="#">Сервисные центры и пункты</a></li>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="agile_footer_grids">
        <div class="col-md-4 col-sm-4 col-xs-4 w3_footer_grid agile_footer_grids_w3_footer">
            <div class="w3_footer_grid_bottom contact">
                <h3>Контакты для деловых партнеров
                </h3>
                <ul>
                    <li><span class="fa fa-map-marker" aria-hidden="true"></span><p>
                            Республиканское унитарное предприятие электросвязи "Белтелеком"
                            Адрес: ул. Энгельса, 6, 220030, г. Минск, Республика Беларусь
                           </p></li>
                    <li><span class="fa fa-envelope-o" aria-hidden="true"></span><a href="mailto:info@example.com"> info@main.beltelecom.by</a></li>
                    <li><span class="fa fa-phone" aria-hidden="true"></span><p>+тел.: +375 17 2171005 (приемная генерального директора)
                            факс: +375 17 3274422</p></li>
                </ul>
            </div>
        </div>
        <div class="col-md-4 col-sm-4  col-xs-4 w3_footer_grid agile_footer_grids_w3_footer">
            <div class="w3_footer_grid_bottom">
                <h3>Пресс-центр</h3>
                <ul class="w3_footer_grid_list">
                    <li>Контакты для средств массовой информации</li>
                    <li>Время работы С 8:30 до 17:15, кроме выходных.</li>
                    <li>Для оперативной работы просим направлять запрос на е-mail: ekaterinamd@main.beltelecom.by или mariaGB@main.beltelecom.by.</li>
                </ul>
            </div>
        </div>
        <div class="col-md-4 col-sm-4  col-xs-4 w3_footer_grid agile_footer_grids_w3_footer">
            <h3 class="title text-center mb-md-4 mb-sm-3 mb-3 mb-2">Контакты</h3>
            <div class="address_mail_footer_grids">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2350.7048924700052!2d27.5595628!3d53.901449!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd092e551a999b635!2z0KHQtdGA0LLQuNGB0L3Ri9C5INGG0LXQvdGC0YAg0JHQtdC70YLQtdC70LXQutC-0Lw!5e0!3m2!1sru!2sby!4v1575377678491!5m2!1sru!2sby" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>

<!--            <div class="w3_footer_grid_bottom contact">-->
<!--                -->
<!--                <h3>our branches</h3>-->
<!--                <img src="public/images/map.jpg" class="img-responsive" alt=""/>-->
<!--            </div>-->
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="wthree_footer_copy">
        <p>© РУП "Белтелеком", <?= date('Y') ?>. УНП 101007741. Все права защищены. Design by <a href="http://www.W3Layouts.com" target="_blank">W3Layouts</a></p>
    </div>
</div>
<!-- //footer -->