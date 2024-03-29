<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
use yii\helpers\Html;
use phpnt\animateCss\AnimateCssAsset;

/* @var $this yii\web\View */
/* @var $page array */
/* @var $modelLoginForm app\models\LoginForm  */
/* @var $form ActiveForm */

AnimateCssAsset::register($this);
?>

<section class="main-content-w3layouts-agileits">
    <div class="container-login">
        <div class="row inner-sec">
            <div class="login p-5 bg-light mx-auto mw-100">
                <div id="elements-form-block" style="padding: 0.5em;">
                <?php $form = ActiveForm::begin([
                    'id' => 'form-login',
                    'action' => Url::to(['/auth/login/']),
                    'options' => ['data-pjax' => true]
                ]); ?>
                <div id="elements-form-block">
                    <div class="row">
                        <div class="col-md-12">
                            <?= $form->field($modelLoginForm, 'email', [
                                    'template' => '{label}<div class="input-group">{input}
                                                            <span class="input-group-addon">
                                                               <i class="fas fa-envelope"></i>
                                                             </span>
                                                            </div>
                                                        <i>{hint} </i>{error}'
                            ])
                                ->textInput(['placeholder' => $modelLoginForm->getAttributeLabel('email'), 'class' => 'login-form']) ?>
                        </div>

                        <div class="col-md-12">
                            <?= $form->field($modelLoginForm, 'password', ['template' => '{label}<div class="input-group">{input}
                                            <span class="input-group-addon"><i class="fas fa-lock"></i></span>
                                         </div><i>{hint}</i>{error}'])
                                ->passwordInput(['placeholder' => $modelLoginForm->getAttributeLabel('password'), 'class' => 'login-form']) ?>
                        </div>

                        <div class="col-md-12">
                                    <?= $form->field($modelLoginForm, 'rememberMe')
                                         ->checkbox(
                                              [
                                                  'template' => '<div class="row">
                                                                    <div class="col-md-1 pull-right">
                                                                        {input}
                                                                    </div>
                                                                    <div class="col-md-11  pull-left">
                                                                        <label class="form-check-label">{label}</label>
                                                                    </div>
                                                                </div>',
                                                  'class' => 'checkbox-size'
                                          ]);
                                    ?>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-12 ">
                            <div class="form-group text-center">
                                <?= Html::submitButton(Yii::t('app', 'Войти'), ['class' => 'btn btn-primary text-uppercase full-width-btn',
                                    'style' => 'width: 100% !important;']) ?>
                            </div>
                        </div>

                    <div class="col-md-12 text-center">
                        <?= Html::button(Yii::t('app', 'Забыли пароль?'), [
                            'class' => 'btn btn-xs btn-warning',
                            'id' => 'password-recovery',
                            'onclick' => '
                                    $.pjax({
                                        type: "POST",
                                        url: "'.Url::to(['/auth/request-password-reset']).'",  
                                        container: "#pjaxModalUniversal2",
                                        push: false,
                                        scrollTo: false
                                    })'])
                        ?>
                    </div>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</section>

        <?php
        $js = <<< JS
        $('#form-login').on('beforeSubmit', function () {
            var form = $(this);
                $.pjax({
                    type: form.attr('method'),
                    url: form.attr('action'),
                    data: new FormData($('#form-login')[0]),
                    container: "#elements-form-block",
                    push: false,
                    scrollTo: false,
                    cache: false,
                    contentType: false,
                    timeout: 10000,
                    processData: false
                })
                .done(function(data) {
                    console.log('ok');
                })
                .fail(function () {
                    // request failed
                    console.log('request failed');
                })
            return false; // prevent default form submission
        });
JS;
        $this->registerJs($js); ?>
<!--    </div>-->
<!--</div>-->


