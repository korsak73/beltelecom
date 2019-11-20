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
class BeltelecomAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'public/css/about.css',
        'public/css/bootstrap.css',
        'public/css/admin-lte-extend.css',
        'public/css/easy-responsive-tabs.css',
        'public/css/flexslider.css',
        'public/css/font-awesome.css',
        'public/css/JiSlider.css',
        'public/css/owl.carousel.css',
        'public/css/pay.css',
        'public/css/popuo-box.css',
        'public/css/products.css',
        'public/css/services.css',
        'public/css/single.css',
        'public/css/style.css',
        '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic',
        '//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic'
    ];
    public $js = [
//        'public/js/SmoothScroll.min.js',
//        'public/js/JiSlider.js',
        'public/js/responsiveslides.min.js',
        'public/js/jquery.flexisel.js',
        'public/js/jquery.flexslider.js',
        'public/js/jquery-2.2.3.min.js',
        'public/js/owl.carousel.js',
        'public/js/jquery.magnific-popup.js',
        'public/js/easy-responsive-tabs.js',
//        'public/js/scripts.js',
//        'public/js/bootstrap.js'
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

    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];
}
