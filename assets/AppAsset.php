<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'public/css/site.css',
//          'public/css/style.css',
    ];
    public $js = [
//        'public/js/app.min.js',
//        'public/js/JiSlider.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'phpnt\fontAwesome\FontAwesomeAsset',
//        'phpnt\adminLTE\AdminLteAsset',
//        'phpnt\metismenu\MetisMenuAsset',
//        'phpnt\bootstrapSelect\BootstrapSelectAsset'
    ];

//    public $jsOptions = [
//        'position' => \yii\web\View::POS_LOAD
//    ];
}
