<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'О нас';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <!--about-->
    <!--about-one-->
    <section class="about-inner py-lg-4 py-md-3 py-sm-3 py-3">
        <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-md-4 mb-sm-3 mb-3 mb-2">О себе</h3>
            <div class="title-wls-text text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
                <p>Учитель-дефектолог (логопед) Корсакова Ольга Леонидовна.   </p>
            </div>
            <div class="row">
                <div class="col-lg-4 w3layouts-right-side-img">
                    <div class="abut-inner-wls-head">
                        <h4 class="pb-3">В профессии с 1995 года</h4>
                        <p>Рабочий стаж - 25 лет. 1995-2006г: УДО№ 424 г.Минска, логопедические группы для детей с заиканием, для детей с тяжелыми нарушениями речи. 2006-2008г:
                            УДО№ 398, логопедическая группа для детей с заиканием. 2008-2017 г: ГУО "ЦКРОиР Фрунзенкого района г.Минска", куратор методичекого объединения
                            учителей-дефектологов ПКПП УДО. С 04.10.2017 г - Индивидуальный предприниматель (ИП) - логопед, УНП 192978561</p>
                    </div>
                </div>
                <div class="col-lg-4 w3layouts-left-side-img">
                    <img src="public/images/blog.jpg" class="img-thumbnail" alt="">
                </div>
                <div class="col-lg-4 w3layouts-right-side-img">
                    <div class="abut-inner-wls-head">
                        <h4 class="pb-3">Сертификаты.</h4>
                        <p>21.03.2009г: повышение квалификации членов ПМПК (кимиссии) ЦКРОиР (АПО). 2012г: победитель городского конкурса, обладатель гранта Мингорисполкома
                            за разработку образовательного проекта по коррекции заикания. 28.10.2016г: повышение квалификации по программе "Нормализация мышечного тонуса у детей
                            с ОПФР" (логопедический массаж, АПО). 07.02.2017г: повышение квалификации по программе коррекции дизартрии (БГПУ им.М.Танка) </p>
                        <div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//about-->
    <!-- team -->
    <section class="team py-lg-4 py-md-3 py-sm-3 py-3" id="team">
        <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-md-4 mb-sm-3 mb-3 mb-2">Наша команда</h3>
            <div class="title-wls-text text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et Lorem ipsum </p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 team-row-grid">
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 team-row-grid">
                    <div class="team-grid">
                        <div class="team-image mb-3">
                            <img src="public/images/t1.jpg" alt="" class="img-fluid">
                            <div class="social-icons">
                                <a href="http://facebook.com/"><span class="fab fa-facebook-f" aria-hidden="true"></span></a>
                                <a href="http://twitter.com/"><span class="fab fa-twitter" aria-hidden="true"></span></a>
                                <a href="http://linkedin.com/"><span class="fab fa-linkedin" aria-hidden="true"></span></a>
                                <a href="http://plus.google.com/"><span class="fab fa-google-plus" aria-hidden="true"></span></a>
                            </div>
                        </div>
                        <h4>Корсакова Ольга Леонидовна</h4>
                        <p class="mt-2">Директор ,CEO</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 team-row-grid">
                </div>
            </div>
        </div>
    </section>
    <!--//team -->
</div>
<?php
$js = <<< JS
        $('.header-w3layouts').attr('hidden', true);
JS;
$this->registerJs($js); ?>

