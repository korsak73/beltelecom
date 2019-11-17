<?php

use kartik\date\DatePicker;
use yii\db\Expression;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-form">
    <div class="container">
        <?php $form = ActiveForm::begin(); ?>
    </div>
    <div class="col-md-8">
        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-8">
        <?= $form->field($model, 'email')->textInput(['readonly' => true]) ?>
    </div>
    <div class="col-md-8">
        <?php
         echo $form->field($model, 'isAdmin')->checkbox(array('value'=>1, 'uncheckValue'=>0), ['class' => 'check-admin'])->label(false) ;
        ?>
    </div>
    <div class="col-md-8">
        <?= $form->field($model, 'status')->dropDownList($model->statusList,
            [
                'class'  => 'form-control',
                'data' => [
                    'style' => 'btn-default',
                    'live-search' => 'false',
                    'title' => 'Статус'
                ]
            ]) ?>
    </div>
    <div class="col-md-8">
        <?php
            echo '<label class="control-label">' . $model->getAttributeLabel('email_verified_at') . '</label>';
            echo DatePicker::widget([
                'model' => $model,
                'attribute' => 'email_verified_at',
                'id' => 'email_verified_att-date',
                'language' => 'ru',
                'disabled' => !empty($model->email_verified_at),
                'type' => DatePicker::TYPE_INPUT,
                'options' => [
                    'value' => empty($model->email_verified_at) ? Yii::$app->formatter->asDatetime(time(), 'php:d.m.Y H:i')
                        : Yii::$app->formatter->asDatetime($model->email_verified_at, 'php:d.m.Y H:i'),
                ],
                'pluginOptions' => [
                    'autoclose' => TRUE,
                    'format'    => 'dd-mm-yyyy',
                    'startDate' => 'd',
                ]

            ]);
        ?>
     </div>
    <div class="col-md-8">
        <?php
            echo '<label class="control-label">' . $model->getAttributeLabel('created_at') . '</label>';
            echo DatePicker::widget([
                'model' => $model,
                'attribute' => 'created_at',
                'id' => 'created_at-date',
                'language' => 'ru',
                'disabled' => !empty($model->created_at),
                'type' => DatePicker::TYPE_INPUT,
                'options' => [
                    'value' => empty($model->created_at) ? Yii::$app->formatter->asDatetime(time(), 'php:d.m.Y H:i')
                        : Yii::$app->formatter->asDatetime($model->created_at, 'php:d.m.Y H:i'),
//                    'value' => new Expression('CURRENT_TIMESTAMP()')
                ],
                'pluginOptions' => [
                    'autoclose' => TRUE,
                    'format'    => 'dd-mm-yyyy',
                    'startDate' => 'd',
                ]

            ]);
        ?>
    </div>
    <div class="col-md-8">
        <?php
            echo '<label class="control-label">' . $model->getAttributeLabel('updated_at') . '</label>';
            echo DatePicker::widget([
                'model' => $model,
                'attribute' => 'updated_at',
                'id' => 'updated_att-date',
                'language' => 'ru',
                'disabled' => true,
                'type' => DatePicker::TYPE_INPUT,
                'options' => [
                    'value' => empty($model->updated_at) ? Yii::$app->formatter->asDatetime(time(), 'php:d.m.Y H:i')
                        : Yii::$app->formatter->asDatetime($model->updated_at, 'php:d.m.Y H:i'),
                ],
                'pluginOptions' => [
                    'autoclose' => TRUE,
                    'format'    => 'dd-mm-yyyy',
                    'startDate' => 'd',
                ]

            ]);
        ?>
    </div>
    <div class="col-md-8">
         <div class="form-group">
            <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success', 'style' => 'margin-top: 12rem;']) ?>
        </div>
    </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
