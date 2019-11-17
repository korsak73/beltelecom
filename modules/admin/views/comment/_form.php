<?php

use app\common\helpers\CommentHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Comments */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comments-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'text')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'article_id')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList(CommentHelper::statusList()) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <div class="row" style="margin: 30px 0px 10px 0px;">
        <div class="col-md-3 center">&nbsp;
            <?= Html::a('Назад', ['/admin/default/index'], ['class' => 'btn btn-warning w100']) ?>
        </div>
        <div class="col-md-3 center">
        </div>
        <div class="col-md-3 center">
            <?php
            //            echo Html::submitButton('Сохранить', ['class' => 'btn btn-info w100'])
            ?>
        </div>
        <div class="col-md-3">&nbsp;</div>
    </div>


    <?php ActiveForm::end(); ?>

</div>
