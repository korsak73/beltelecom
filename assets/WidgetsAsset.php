<?php
namespace app\assets;

use yii\web\AssetBundle;

class WidgetsAsset extends AssetBundle
{
    public $sourcePath = '@app/common/widgets';
    public $css = [
        'css/scrollup.css',
    ];
    public $js = [
        'js/scrollup.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}