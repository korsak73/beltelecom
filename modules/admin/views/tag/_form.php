<?php

use kartik\date\DatePicker;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tags */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tags-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="col-md-8">
        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-8">
        <?= $form->field($model, 'slug')->textInput(['readonly' => true]) ?>
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
        <div class="row" style="margin: 30px 0px 10px 0px;">
            <div class="col-md-3 center">&nbsp;
                <?= Html::a('Назад', ['/admin/tag/index'], ['class' => 'btn btn-warning w100']) ?>
            </div>
            <div class="col-md-3" style="float: left">
                <?= Html::submitButton('Сохранить', ['class' => 'btn btn-info w100'])?>
            </div>
            <div class="col-md-3 center">

            </div>
            <div class="col-md-3">&nbsp;</div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>
