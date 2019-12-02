<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

//$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>
    <section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
        <h3 class="title text-center mb-md-4 mb-sm-3 mb-3 mb-2">Контакты</h3>
        <div class="address_mail_footer_grids">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2350.1575004790416!2d27.484717816168416!3d53.91117708010131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dbc538ea488def%3A0xf891ed1ceb6b22a2!2z0YPQuy4g0KHQtdGA0LTQuNGH0LAgNywg0JzQuNC90YHQug!5e0!3m2!1sru!2sby!4v1570690547156!5m2!1sru!2sby" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
        <div class="row w3pvt-info-para pt-lg-5 pt-md-4 pt-3">
            <!--contact-map -->
            <div class="col-lg-6 col-md-6">
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
            <!--//contact-map -->
            <!--contact-form-->
            <div class="col-lg-6 col-md-6 contact-form">
                <div class="contact-list-grid">
                    <h4>Адрес</h4>
                    <p class="pt-2">Минск</p>
                    <p>Беларусь</p>
                </div>
                <div class="contact-list-grid mt-3">
                    <h4>Email</h4>
                    <p class="pt-2"><a href="mailto:info@example.com">volhakorsakova@gmail.com</a>
                    </p>
                </div>
                <div class="contact-list-grid mt-3">
                    <h4>Телефоны</h4>
                    <p class="pt-2">(+375) 29 694-30-27</p>
                    <p>(+375) 29 644-11-26</p>
                </div>
            </div>
        </div>
        </div>
    </section>
</div>
<?php
$js = <<< JS
        $('.header-w3layouts').attr('hidden', true);
JS;
$this->registerJs($js); ?>