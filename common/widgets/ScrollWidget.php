<?php
/*
 * Кнопка вверх
 */
?>
<?php

namespace app\common\widgets;

use Yii;
use yii\base\Widget;
use app\assets\WidgetsAsset;

class ScrollWidget extends Widget {

    public function run() {
        //Подключаем свой файл Asset
        WidgetsAsset::register($this->view);

        return $this->render('@app/common/widgets/views/scrollup',[
        ]);
    }
}