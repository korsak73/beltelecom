
<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $modelResetPasswordForm app\models\forms\ResetPasswordForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = Yii::t('app', 'Сброс пароля');
$this->params['breadcrumbs'][] = $this->title;

?>
<section class="main-content-w3layouts-agileits">
    <div class="container">
        <h3 class="title"><?= Html::encode($this->title) ?></h3>
        <div class="row inner-sec">
            <div class="login p-5 bg-light mx-auto mw-100">
                <p><?= Yii::t('app', 'Введите новый пароль') ?>:</p>
                <?php $form = ActiveForm::begin([
                    'id' => 'reset-password-form',
                    'layout' => 'horizontal',
                    'fieldConfig' => [
                        'template' => "{label}\n<div style='min-width: 100% !important;' class=\"col-3\">{input}</div>\n<div class=\"col-8\">{error}</div>",
                        'labelOptions' => ['class' => 'col-1 control-label'],
                    ],
                ]); ?>
                <div class="form-group">
                    <?= $form->field($modelResetPasswordForm, 'password')->passwordInput(['autofocus' => true]) ?>
                </div>

                <div class="form-group">
                    <div class=" col-12">
                      <?= Html::submitButton(Yii::t('app', 'Сохранить'), ['class' => 'btn btn-primary']) ?>
                    </div>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</section>