<?php
/**
 * Created by PhpStorm.
 * User: phpNT - http://phpnt.com
 * Date: 22.04.2016
 * Time: 13:47
 */

namespace phpnt\animateCss;

use yii\web\AssetBundle;

/**
 * Class AssetBundle
 */
class AnimateCssAsset extends AssetBundle
{
    /**
     * @inherit
     */
    public $sourcePath = '@bower/animate.css';

    /**
     * @inherit
     */
    public $css = [
        'animate.min.css',
    ];

    public function init()
    {
        parent::init();
    }
}