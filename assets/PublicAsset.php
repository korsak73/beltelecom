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
class PublicAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'public/css/bootstrap.min.css',
        'public/css/fontawesome-all.min.css',
//        'public/css/fontawesome.min.css',
        'public/css/lightbox.css',
        'public/css/style2.css',
//        'public/css/style.css',
        'public/css/admin-lte-extend.css',
        'public/css/all.css',
        'public/css/site.css',
        '//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700',
        '//fonts.googleapis.com/css?family=Open+Sans:300,400,600'
    ];
    public $js = [
        'public/js/jquery-2.2.3.min.js',
//        'public/js/jquery-3.4.0.min.js',
        'public/js/bootstrap.min.js',
        'public/js/lightbox-plus-jquery.min.js',
        'public/js/responsiveslides.min.js',
        'public/js/jquery.flexisel.js',
        'public/js/move-top.js',
        'public/js/easing.js',
        'public/js/scripts.js'
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
//        'yii\bootstrap\BootstrapPluginAsset',
//        'phpnt\fontAwesome\FontAwesomeAsset',
//        'phpnt\adminLTE\AdminLteAsset',
//        'phpnt\metismenu\MetisMenuAsset',
//        'phpnt\bootstrapSelect\BootstrapSelectAsset'
    ];

    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];
}
