<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\widgets\Pjax;
?>
<div class="sidebar_section subscription">
<!--    <h4>Подписка</h4>-->
    <?php Pjax::begin(['enablePushState' => false, 'id' => 'pjax_form']); ?>
    <?php $form = ActiveForm::begin([
        'action' => yii\helpers\Url::to(['site/subscription']),
        'options' => [
            'data-pjax' => true,
        ],
        ]); ?>
        <div class=" subscribe-form ">
            <div class="form-group contact-forms">
                <?=$form->field($model, 'email')->textInput(['placeholder'=>'E-mail'])->label(false);?>
            </div>
            <div class="click-subscribe">
                <?=Html::submitButton('Подписаться',  ['class' => 'submit btn btn-block click-me']); ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>
    <?php Pjax::end(); ?>
    <div style="clear:both;"></div>
</div>
<?php
$script = <<< JS
	window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove();
    });
}, 3000);
JS;
//маркер конца строки, обязательно сразу, без пробелов и табуляции
$this->registerJs($script, yii\web\View::POS_LOAD);
?>
