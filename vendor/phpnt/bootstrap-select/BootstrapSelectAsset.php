<?php
/**
 * Created by PhpStorm.
 * User: phpNT - http://phpnt.com
 * Date: 22.04.2016
 * Time: 13:47
 */

namespace phpnt\bootstrapSelect;

use yii\web\AssetBundle;

/**
 * Class AssetBundle
 * @package rmrevin\yii\fontawesome
 */
class BootstrapSelectAsset extends AssetBundle
{
    /**
     * @inherit
     */
    public $sourcePath = '@bower/bootstrap-select';

    /**
     * @inherit
     */
    public $css = [
        'dist/css/bootstrap-select.min.css',
    ];

    /**
     * @inherit
     */
    public $js = [
        'dist/js/bootstrap-select.min.js',
    ];

    public function init()
    {
        switch (\Yii::$app->language) {
            case ('ru' || 'ru_RU'):
                $this->js[] = [
                    'dist/js/i18n/defaults-ru_RU.min.js',
                ];
                break;
            case ('fr' || 'fr_FR'):
                $this->js[] = [
                    'dist/js/i18n/defaults-fr_FR.min.js',
                ];
                break;
            case ('de' || 'de_DE'):
                $this->js[] = [
                    'dist/js/i18n/defaults-de_DE.min.js',
                ];
                break;
        }
        $this->registerJs();
        parent::init();
    }

    protected function registerJs()
    {
        $js = <<<SCRIPT
            $('.selectpicker').selectpicker({});
SCRIPT;
        \Yii::$app->view->registerJs($js);
        return $this;
    }
}