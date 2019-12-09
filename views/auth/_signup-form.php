<?php

//use phpnt\bootstrapNotify\BootstrapNotify;
//use phpnt\bootstrapSelect\BootstrapSelectAsset;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $page array */
/* @var $modelSignupForm app/models\SignupForm */
/* @var $key integer */
?>
<section class="main-content-w3layouts-agileits">
    <div class="container-login">
        <div class="row inner-sec">
            <div class="login p-5 bg-light mx-auto mw-100">
                <div id="elements-form-block" style="padding: 0.5em;">
            <!--    --><?php //BootstrapSelectAsset::register($this) ?>
            <!--    --><?//= BootstrapNotify::widget() ?>
                    <?php $form = ActiveForm::begin([
                        'id' => 'form-signup',
                        'action' => Url::to(['/auth/signup/']),
                        'options' => ['data-pjax' => true]
                    ]); ?>
                    <div class="row">
                        <div class="col-sm-12">
                            <?= $form->field($modelSignupForm, 'name', ['template' => '{label} 
                                                            <div class="input-group">
                                                                {input}<span class="input-group-addon"><i class="fas fa-user" aria-hidden="true"></i></span>
                                                             </div>
                                                            <i>{hint}</i>{error}'])
                                ->textInput(['placeholder' => $modelSignupForm->getAttributeLabel('email'), 'class' => 'login-form']) ?>
                        </div>
                        <div class="col-sm-12">
                            <?= $form->field($modelSignupForm, 'email', ['template' => '{label} 
                                                            <div class="input-group">
                                                                {input}<span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                                             </div>
                                                            <i>{hint}</i>{error}'])
                                ->textInput(['placeholder' => $modelSignupForm->getAttributeLabel('email'), 'class' => 'login-form']) ?>
                        </div>
                        <div class="col-sm-12">
                            <?= $form->field($modelSignupForm, 'password', ['template' => '{label} 
                                                            <div class="input-group">
                                                                {input}<span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                                                             </div>
                                                            <i>{hint}</i>{error}'])
                                ->passwordInput(['placeholder' => $modelSignupForm->getAttributeLabel('password'), 'class' => 'login-form']) ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($modelSignupForm, 'reCaptcha')->widget(\himiklab\yii2\recaptcha\ReCaptcha::className())?>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group text-center">
                                <?= Html::submitButton(Yii::t('app', 'Регистрация'), ['class' => 'btn btn-primary text-uppercase full-width',
                                    'style' => 'width: 100% !important;']) ?>
                            </div>
                        </div>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
</section>
    <?php
    $js = <<< JS
        $('#form-signup').on('beforeSubmit', function () { 
            var form = $(this);
                $.pjax({
                    type: form.attr('method'),
                    url: form.attr('action'),
                    data: new FormData($('#form-signup')[0]),
                    container: "#elements-form-block",
                    push: false,
                    scrollTo: false,
                    cache: false,
                    contentType: false,
                    timeout: 10000,
                    processData: false
                })
                .done(function(data) {
                    
                })
                .fail(function () {
                    // request failed
                    console.log('request failed');
                })
            return false; // prevent default form submission
        });
JS;
    $this->registerJs($js); ?>
</div>