<?php

use kartik\widgets\DatePicker;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
use yii\helpers\Html;
use yii\web\JsExpression;
use yii\widgets\ActiveForm;
mihaildev\elfinder\Assets::noConflict($this);

/* @var $this yii\web\View */
/* @var $model app\models\Articles */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="articles-form">
        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

        <?php

            echo $form->field($model, 'description')->widget(CKEditor::className(),[
                'editorOptions' => [
                    'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                    'inline' => false, //по умолчанию false
                    'extraPlugins'=>'youtube'
                ],
            ]);

     $this->registerJs("CKEDITOR.plugins.addExternal('youtube', '/youtube/');");

        ?>

        <?php
            echo $form->field($model, 'content')->widget(CKEditor::className(), [

                'editorOptions' => ElFinder::ckeditorOptions('elfinder',[
                        /* Some CKEditor Options */
                    'style' => 'height:calc(100vh - 70px);width:100%;',
                    'extraPlugins'=>'youtube',
                    'language' => 'ru',
                    'frameOptions' => [
                            'style' => 'height:100%;width:100%;'
                    ],
                    'callbackFunction' => new JsExpression('function(file, id){}'),
                    'filter' => [
                        'image',
                        'application',
                        'text',
                        'video'
                    ],
                ]),
              ]);
        ?>
        <div style="width: 20%">
            <?= $form->field($model, 'publish_date')->widget(DatePicker::className(), [
                'type' => DatePicker::TYPE_INPUT,
                'name' => 'Articles[publish_date]',
                'language' => 'ru',
                'value' => date('d-m-Y'),
                'pluginOptions' => [
                    'format' => 'dd.mm.yyyy',
                    'autoclose' => true,
                    'todayHighlight' => true,
                    'todayBtn' => true,
                ],
                'options' => [
                    'placeholder' => 'Дата публикации '
                ]
            ]); ?>
        </div>


        <div class="form-group" style="margin-top: 1em;">
            <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>
</div>
