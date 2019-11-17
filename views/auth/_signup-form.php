<?php

//use phpnt\bootstrapNotify\BootstrapNotify;
//use phpnt\bootstrapSelect\BootstrapSelectAsset;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Url;
use yii\bootstrap\Html;

/* @var $this yii\web\View */
/* @var $page array */
/* @var $modelSignupForm app/models\SignupForm */
/* @var $key integer */
?>
<div id="elements-form-block">
<!--    --><?php //BootstrapSelectAsset::register($this) ?>
<!--    --><?//= BootstrapNotify::widget() ?>
    <?php $form = ActiveForm::begin([
        'id' => 'form',
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
                ->textInput(['placeholder' => $modelSignupForm->getAttributeLabel('email')]) ?>
        </div>
        <div class="col-sm-12">
            <?= $form->field($modelSignupForm, 'email', ['template' => '{label} 
                                            <div class="input-group">
                                                {input}<span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                             </div>
                                            <i>{hint}</i>{error}'])
                ->textInput(['placeholder' => $modelSignupForm->getAttributeLabel('email')]) ?>
        </div>
        <div class="col-sm-12">
            <?= $form->field($modelSignupForm, 'password', ['template' => '{label} 
                                            <div class="input-group">
                                                {input}<span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                                             </div>
                                            <i>{hint}</i>{error}'])
                ->passwordInput(['placeholder' => $modelSignupForm->getAttributeLabel('password')]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($modelSignupForm, 'reCaptcha')->widget(\himiklab\yii2\recaptcha\ReCaptcha::className())?>
        </div>
        <div class="col-sm-12">
            <div class="form-group text-center">
                <?= Html::submitButton(Yii::t('app', 'Регистрация'), ['class' => 'btn btn-primary text-uppercase full-width']) ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
    <?php
    $js = <<< JS
        $('#form').on('beforeSubmit', function () { 
            var form = $(this);
                $.pjax({
                    type: form.attr('method'),
                    url: form.attr('action'),
                    data: new FormData($('#form')[0]),
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