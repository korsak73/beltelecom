<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $modelLoginForm app\models\LoginForm */
/* @var $modelSignupForm app\models\SignupForm */
/* @var $modelPasswordResetRequestForm app\models\forms\PasswordResetRequestForm */

?>
<!-- //header -->
    <div class="w3ls-banner contact-agileinfo">
        <div class="container">
            <h2 class="w3ls-title">Необходима помощь?</h2>
            <h3 class="w3-subtitle">we're here for you!</h3>
        </div>
    </div>
    <!-- //banner -->
    <!-- breadcrumbs -->
    <div class="w3layouts-breadcrumbs text-center">
        <div class="container">
            <span class="agile-breadcrumbs"><a href="<?= Url::home()?>">Главная</a> > <span>Контакты</span></span>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <div class="w3l-main-contact">
        <div class="container">
            <div class="col-md-9 agileinfo-contact-main-address">
                <h4 class="w3ls-inner-title">Контакты</h4>
                <p>Получить ответы на интересующие Вас вопросы по услугам нашей компании можно по телефону 123 – единый центр обслуживания клиентов. Номер телефона действует по всей территории Республики Беларусь. Звонки бесплатные.</p>
                <div class="list_agileits_w3layouts">
                    <div class="section_class_agileits sec-left">
                        <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
                            <div class="alert alert-success alert-dismissable">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                <h4><i class="icon fa fa-check"></i> Благодарим Вас за обращение к нам. Будем рады ответить.</h4>
                            </div>
                        <?php endif; ?>
                        <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                        <div class="w3pvt-wls-contact-mid">
                            <div class="form-group contact-forms">
                                <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
                            </div>
                            <div class="form-group contact-forms">
                                <?= $form->field($model, 'email') ?>
                            </div>
                            <div class="form-group contact-forms">
                                <?= $form->field($model, 'subject') ?>
                            </div>
                            <div class="form-group contact-forms">
                                <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>
                            </div>
                            <div class="form-group contact-forms">
                                <?= $form->field($model, 'reCaptcha')->widget(\himiklab\yii2\recaptcha\ReCaptcha::className())?>
                            </div>
                            <?= Html::submitButton('Отправить', ['class' => 'btn sent-butnn', 'name' => 'contact-button']) ?>
                        </div>
                        <?php ActiveForm::end(); ?>
                    </div>
                    </div>
                    <div class="section_class_agileits sec-right">
                        <div class="contact-list-grid">
                            <h4>Контакты для деловых партнеров</h4>
                            <p class="pt-2">Адрес: ул. Энгельса, 6, 220030, г. Минск, Республика Беларусь
                                info@main.beltelecom.by</p>
                            <p class="pt-2">Республиканское унитарное предприятие электросвязи "Белтелеком"</p>
                        </div>
                        <div class="contact-list-grid mt-3">
                            <h4>Email</h4>
                            <p class="pt-2"> ekaterinamd@main.beltelecom.by</p>
                        </div>
                        <div class="contact-list-grid mt-3">
                            <h4>Телефоны</h4>
                            <p class="pt-2">+375 17 2171005 (приемная генерального директора)
                               </p>
                            <p> факс: +375 17 3274422</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
	        </div>		
         </div>
        <div class="clearfix"></div>
</div>
    	<!-- footer -->
