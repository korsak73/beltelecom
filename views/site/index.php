<?php

/* @var $modelLoginForm app\models\LoginForm */
/* @var $modelSignupForm app\models\SignupForm */
/* @var $modelPasswordResetRequestForm app\models\forms\PasswordResetRequestForm */
 /* @var $form yii\bootstrap\ActiveForm */

$list = [
    '0' => 'w3layouts-banner-top',
    '1' => 'w3layouts-banner-top w3layouts-banner-top1',
    '2' => 'w3layouts-banner-top w3layouts-banner-top2',
    '3' => 'w3layouts-banner-top w3layouts-banner-top3',
];
$k = array_rand($list);
$v = $list[$k];
if($k == 0){
    $v1 =  $list[$k];
    $v2 =  $list[$k+1];
    $v3 =  $list[$k+2];
    $v4 =  $list[$k+3];
}
if($k == 1){
    $v1 =  $list[$k];
    $v2 =  $list[$k+1];
    $v3 =  $list[$k+2];
    $v4 =  $list[$k-1];
}
if($k == 2){
    $v1 =  $list[$k];
    $v2 =  $list[$k+1];
    $v3 =  $list[$k-1];
    $v4 =  $list[$k-2];
}
if($k == 3){
    $v1 =  $list[$k];
    $v2 =  $list[$k-1];
    $v3 =  $list[$k-2];
    $v4 =  $list[$k-3];
}
?>
<!-- banner -->
<div class="banner-silder">
    <div id="JiSlider" class="jislider">
        <ul>
            <li>
                <div class="<?= $v1;?>">
                    <div class="container">
                        <div class="agileits-banner-info">
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="<?= $v2;?>">
                    <div class="container">
                        <div class="agileits-banner-info">
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="<?= $v3;?>">
                    <div class="container">
                        <div class="agileits-banner-info">
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="<?= $v4;?>">
                    <div class="container">
                        <div class="agileits-banner-info">
                  </div>
                    </div>
                </div>
            </li>

        </ul>
    </div>
</div>
<div class="container">
    <!-- services section -->
    <div class="w3ls-section w3_agileits-services" id="services">
        <h2 class="agileits-title">Приглашаем к сотрудничеству</h2>
        <h4 class="wthree">Компания «Белтелеком» готова полностью обеспечить потребность современного офиса, бизнеса и производства в телекоммуникационных услугах.</h4>
<!--        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor.-->
<!--            Integer laoreet placerat suscipit.</p>-->
        <div class="agileinfo-about-main">
            <div class="col-md-8 demo">
                <div id="verticalTab">
                    <ul class="resp-tabs-list">
                        <li>
                            <div class="tab1">
                                <h3>Для Дома</h3>
                            </div>
                        </li>
                        <li>
                            <div class="tab1">
                                <h3>Для Бизнеса</h3>
                            </div>
                        </li>
                        <li>
                            <div class="tab1">
                                <h3>Операторам связи</h3>
                            </div>
                        </li>
                        <li>
                            <div class="tab1">
                                <h3>Пропуск трафика</h3>
                            </div>
                        </li>
<!--                        <li>-->
<!--                            <div class="tab1">-->
<!--                                <h3>Размещение оборудования</h3>-->
<!--                            </div>-->
<!---->
<!--                        </li>-->
                    </ul>
                    <div class="resp-tabs-container">
                        <div class="tabs-right1">
                            <h6>Основными особенностями пакетов услуг «ЯСНА» являются:</h6>
                            <p>наличие в составе пакета трех базовых услуг, которые делают современную жизнь более комфортной: доступа к сети Интернет, телевидения (с использованием различных технологий) и телефонной связи на базе платформы IMS. Услуги телефонной связи включены в пакет на условиях неограниченного количества и времени соединений фиксированной сети РУП «Белтелеком». Таким образом, при совершении местных и междугородных звонков, никакой дополнительной платы, кроме абонплаты за пакет, с абонента не взимается. Кроме того, в данные пакеты услуг включена дополнительная услуга телефонной связи «Идентификация линии вызывающего абонента (CLIP)»</p>
                            <p class="agile-tab-txt">использование современной технологии xPON, гарантирующей высокую скорость доступа в Интернет, возможность просмотра интерактивного телевидения на любом количестве телеприемников, и неизменно высокое качество всех оказываемых услуг..</p>
                            <p>выгодная стоимость: подключение к услугам в составе пакета дешевле, чем по отдельности.</p>
<!--                            <div class="button">-->
<!--                                <a href="#">Get More<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a>-->
<!--                            </div>-->
                        </div>
                        <div class="tabs-right1">
                            <h6>По выделенной линии</h6>
                            <p>Доступ к сети Интернет по выделенной линии предназначен для тех предприятий и организаций, для которых сеть Интернет является важной составляющей бизнеса. В рамках этой услуги Вам будет предоставлен постоянный доступ к сети Интернет в режиме 24 часа в сутки, 7 дней в неделю</p>
                            <p class="agile-tab-txt">В зависимости от конкретных потребностей Вашей организации, доступ в сеть может быть предоставлен на скорости от 1 Мбит/с и выше. Заказчикам, для которых особенно важными являются вопросы надежности услуги, мы предлагаем дополнительный сервис «горячее резервирование канала».</p>
                            <p>Для абонентов услуги, подключенных на скорости 100  Мбит/с и более, имеется возможность подключения дополнительного сервиса «Защита от DDoS-атак»..</p>
<!--                            <div class="button">-->
<!--                                <a href="#">Get More<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a>-->
<!--                            </div>-->
                        </div>
                        <div class="tabs-right1">
                            <h6>Актуальная версия порядка оказания</h6>
                            <p>Услуга по предоставлению операторам электросвязи доступа к международным сетям передачи данных, в том числе к сегменту Интернет</p>
                            <p class="agile-tab-txt">Поскольку к услугам операторского класса предъявляются самые высокие требования, в Белтелеком осуществляется круглосуточный мониторинг оборудования, операторам предоставляется оперативная информация о состоянии сети Интернет и сети Белтелеком, действует служба поддержки..</p>
                            <p>Дополнительно в рамках услуги «Доступ к сети Интернет с гарантированной полосой пропускания» заказчику может быть предоставлена услуга по ограничению доступа к ресурсам сети Интернет, включенным в список ограниченного доступа и содержащие информацию, запрещенную или ограниченную к распространению в соответствии с законодательными актами Республики Беларусь..</p>
<!--                            <div class="button">-->
<!--                                <a href="#">Get More<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a>-->
<!--                            </div>-->
                        </div>
                        <div class="tabs-right1">
                            <h6>Пропуск трафика на сети зарубежных операторов связи</h6>
                            <p>В рамках межоператорского сотрудничества РУП «Белтелеком» оказывает услуги по пропуску международного трафика от абонентов операторов сетей электросвязи Республики Беларусь на международные сети связи.</p>
                            <p class="agile-tab-txt">РУП "Белтелеком" предоставляет в пользование каналы и тракты по всей территории Республики Беларусь. Воспользовавшись данной услугой, Вы получаете возможность постоянно оперативно обмениваться большими объемами информации. Благодаря разветвленной сети, РУП "Белтелеком" имеет возможность объединить территориально удаленные офисы (подразделения) предприятия в единую защищенную корпоративную сеть..</p>
                            <p>Услуга "Предоставление в пользование каналов и трактов" позволит Вам организовать надёжную связь между компьютерными и информационными сетями по всей территории Республики Беларусь. Также данная услуга может быть использована операторами сетей электросвязи и крупными корпорациями при построении собственных телекоммуникационных сетей..</p>
<!--                            <div class="button">-->
<!--                                <a href="#">Get More<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a>-->
<!--                            </div>-->
                        </div>
                    </div>
                </div>
                <div style="height: 30px; clear: both"></div>
            </div>
            <div class="col-md-4 w3ls-about-right">
                <img src="public/images/home.png" class="img-responsive" alt="" />
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- //agents section -->
<!--     markets -->
    		<div class="w3ls-section markets" id="markets">
    			<div class="markets-grids">
    				<div class="col-md-3 col-sm-6 col-xs-6 w3ls-markets-grid text-center">
    					<div class="agileits-icon-grid">
    						<div class="icon-left">
    							<i class="fa fa-wifi" aria-hidden="true"></i>
    						</div>
    						<div class="icon-right">
                                <a href="http://byfly.by/">
                                    <img src="public/images/byfly.png" class="img-responsive" alt="" />
    							    <h5>Летать легко</h5>
                                </a>
    							<p>Цифровые продукты и решения помогут юридическим лицам и индивидуальным предпринимателям повысить эффективность бизнес-процессов в любой сфере</p>
    						</div>
    						<div class="clearfix"> </div>
    					</div>
    				</div>
    				<div class="col-md-3 col-sm-6 col-xs-6 w3ls-markets-grid text-center">
    					<div class="agileits-icon-grid">
    						<div class="icon-left">
    							<i class="fa fa-cog" aria-hidden="true"></i>
    						</div>
    						<div class="icon-right">
                                <a href="http://yasna.by">
                                    <img src="public/images/yasna.png" class="img-responsive" alt="" />
                                    <h5>Ты Дома</h5>
                                </a>
    							<p>Пакеты услуг линейки «ЯСНА» включают три основные услуги, необходимые современному человеку для комфорта и полноценного общения: Интернет, телефонную связь и телевидение.</p>
    						</div>
    						<div class="clearfix"> </div>
    					</div>
    				</div>
    				<div class="col-md-3 col-sm-6 col-xs-6 w3ls-markets-grid text-center">
    					<div class="agileits-icon-grid">
    						<div class="icon-left">
    							<i class="fa fa-television" aria-hidden="true"></i>
    						</div>
    						<div class="icon-right">
                                <a href="http://zala.by/">
                                    <img src="public/images/zala.png" class="img-responsive" alt="" />
                                    <h5>Управляй своим телевидением</h5>
                                </a>
    							<p>Телевидение ZALA — это современный способ доступа к различным телеканалам, обеспечивающий высокое качество телевизионного сигнала.</p>
    						</div>
    						<div class="clearfix"> </div>
    					</div>
    				</div>
    				<div class="col-md-3 col-sm-6 col-xs-6 w3ls-markets-grid text-center">
    					<div class="agileits-icon-grid">
    						<div class="icon-left">
    							<i class="fa fa-tasks" aria-hidden="true"></i>
    						</div>
    						<div class="icon-right">
                                <a href=" https://home.beltelecom.by/">
                                    <img src="public/images/homeIndex.png" class="img-responsive" alt="" />
                                    <h5>Умный дом</h5>
                                </a>
    							<p>«Умный дом» помогает повысить комфорт и безопасность проживания, позволяя контролировать различные процессы, происходящие в доме либо офисе.</p>
    						</div>
    						<div class="clearfix"> </div>
    					</div>
    				</div>
    				<div class="clearfix"> </div>
    			</div>
    		</div>
<!--     //markets -->

    <!-- offers -->
    		<div class="w3ls-section offers">
    			<div class="offers-grids">
    				<div class="wthree-offers-right">
    					<div class="col-md-7  col-sm-8 col-xs-8 wthree-offers1-right">
    						<h4>Белтелеком | Телевидение</h4>
    						<p></p>
    						<ul>
    							<li><a href="https://beltelecom.by/business/tv/interaktivnoe"><i class="fa fa-angle-right" aria-hidden="true"></i>Интерактивное</a></li>
    							<li><a href="https://beltelecom.by/business/tv/efirnoe"><i class="fa fa-angle-right" aria-hidden="true"></i> Эфирное </a></li>
    							<li><a href="https://beltelecom.by/business/tv/smart"><i class="fa fa-angle-right" aria-hidden="true"></i> SMART</a></li>
    							<li><a href="https://beltelecom.by/business/tv/poryadok-okazaniya-uslugi-interaktivnogo-televideniya-zala"><i class="fa fa-angle-right" aria-hidden="true"></i> Порядок оказания услуг</a></li>
    							<li><a href="https://beltelecom.by/business/tv/coverage-areas-of-the-territory-of-digital-terrestrial-tv"><i class="fa fa-angle-right" aria-hidden="true"></i> Охват территории РБ эфирным телевизионным вещанием</a></li>
    						</ul>
    					</div>
    					<div class="col-md-5 col-sm-4  col-xs-4 wthree-offers1">
    						<img src="public/images/bg.jpg" alt="" class="img-responsive" />
    					</div>

    					<div class="clearfix"> </div>
    				</div>
    				<div class="w3ls-offers-main">
    					<div class="col-md-5  col-sm-4 col-xs-4 wthree-offers1">
    						<img src="public/images/sat.png" alt="" class="img-responsive" />
    					</div>
    					<div class="col-md-7  col-sm-8 col-xs-8 wthree-offers-left">
    						<div class="offers-left-heading">
    							<h4>Белтелеком | Хостинг</h4>
    							<h5></h5>
    						</div>
    						<div class="offers-left-grids">
    							<div class="offers-number">
    								<p>1</p>
    							</div>
    							<div class="offers-text">
                                    <a href="https://beltelecom.by/business/hosting/disk-space">
    								    <p>Предоставление дискового пространства.</p>
                                    </a>
    							</div>
    							<div class="clearfix"> </div>
    						</div>
    						<div class="offers-left-grids offers-left-middle">
    							<div class="offers-number">
    								<p>2</p>
    							</div>
    							<div class="offers-text">
                                    <a href="https://beltelecom.by/business/hosting/dedicated-server-new">
    								    <p>Предоставление физического сервера (Dedicated).</p>
                                    </a>
    							</div>
    							<div class="clearfix"> </div>
    						</div>
    						<div class="offers-left-grids">
    							<div class="offers-number">
    								<p>3</p>
    							</div>
    							<div class="offers-text">
                                    <a href="https://beltelecom.by/business/hosting/placing-colocation">
    								    <p>Размещение оборудования (Colocation).</p>
                                    </a>
    							</div>
    							<div class="clearfix"> </div>
    						</div>
    					</div>
    					<div class="clearfix"> </div>
    				</div>
    			</div>
    		</div>
    <!-- offers -->
    		<div class="service-bottom">
    				<div class="services-w3ls-row agileits-w3layouts">
    					<div class="col-md-3 col-sm-3 col-xs-6 services-grid agileits-w3layouts text-center">
    						<i class="fa fa-envelope-o" aria-hidden="true"></i>
    						<h5>Индивидуальный подход</h5>

    					</div>
    					<div class="col-md-3 col-sm-3 col-xs-6 services-grid agileits-w3layouts text-center">
    						<i class="fa fa-comments" aria-hidden="true"></i>
    						<h5>Доступность услуг 24/7</h5>

    					</div>
    					<div class="col-md-3 col-sm-3 col-xs-6 services-grid agileits-w3layouts text-center">
    						<i class="fa fa-question" aria-hidden="true"></i>
    						<h5>Вопросы и ответы</h5>

    					</div>
    					<div class="col-md-3 col-sm-3 col-xs-6 services-grid agileits-w3layouts text-center">
    						<i class="fa fa-list-alt" aria-hidden="true"></i>
    						<h5>Решения от ведущих поставщиков</h5>

    					</div>
    					<div class="clearfix"> </div>
    				</div>
    			</div>
</div>

<?= $this->render('@app/views/auth/login', [
    'modelLoginForm' => $modelLoginForm,
])?>

<?= $this->render('@app/views/auth/signup', [
    'modelSignupForm' => $modelSignupForm
])?>

<?= $this->render('@app/views/auth/request-password-reset-token', [
    'modelPasswordResetRequestForm' => $modelPasswordResetRequestForm
])?>