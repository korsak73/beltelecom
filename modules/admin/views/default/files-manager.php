<?php

use mihaildev\elfinder\Assets;
use yii\bootstrap\Modal;
use yii\web\JsExpression;
use mihaildev\elfinder\ElFinder;

/* @var $this yii\web\View */
?>

<?php
Assets::noConflict($this);

Modal::begin([
    'id' => 'file-manager',
    'size' => 'modal-lg',
    'header' => '<h2 class="text-center">' . Yii::t('app', 'Файловый менеджер') . '</h2>',
    'clientOptions' => ['show' => true],
    'options' => [],
]);

    echo ElFinder::widget(
            [
                'language' => 'ru',
                'frameOptions' => [
                        'style' => 'height:100%;width:100%;'
                ],
                'containerOptions' => [
                        'style' => 'height:calc(100vh - 70px);width:100%;'
                ],
                'id' => 'file-manager-modal',
                'controller' => 'elfinder',
                'filter' => [
                    'image',
                    'application',
                    'text',
                    'video'
                ],
                'callbackFunction' => new JsExpression('function(file, id){}')
            ]);

?>
    <div class="clearfix"></div>
<?php
Modal::end();