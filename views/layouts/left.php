<?php

use yii\helpers\Url;
use yii\widgets\Menu;
/* @var $this yii\web\View */
?>
<aside class="main-sidebar">
    <section class="sidebar" style="min-height: 1456px;">
        <?php if(!empty($model)):?>
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img class="img-circle"  src="<?= $model->getImage();?>" alt="avatar" >
                    </div>
                    <div class="pull-left info">
                        <p><?= Yii::$app->user->identity->name ?></p>

                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
        <?php endif;
        ?>
        <!-- search form -->
<!--        <form action="#" method="get" class="sidebar-form">-->
<!--            <div class="input-group">-->
<!--                <input type="text" name="q" class="form-control" placeholder="Search..."/>-->
<!--              <span class="input-group-btn">-->
<!--                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>-->
<!--                </button>-->
<!--              </span>-->
<!--            </div>-->
<!--        </form>-->
<!--         /.search form -->

<!--//= dmstr\widgets\Menu::widget(-->
<?= Menu::widget(
            [
                'options' => [
                    'class' => 'sidebar-menu tree',
                    'data-widget'=> 'tree'
                ],
                'submenuTemplate' => "\n<ul class='treeview-menu' role='menu'>\n{items}\n</ul>\n",
                'encodeLabels' => false,
                'items' => [
                    [
                        'label' => Yii::t('app', 'Панель администрирования'),
                        'options' => ['class' => 'header'],
                    ],
                    [
                        'label' => 'Вход',
                        'url' => ['auth/login'],
                        'visible' => Yii::$app->user->isGuest
                    ],
                    [
                        'label' => '<i class="fas fa-hdd"></i><span> ' . Yii::t('app', 'Файловый менеджер') . '</span>',
                        'url' => ['#'],
                        'template' => '<a id="link-files-manager" href="javascript:void(0);" class="url-class">{label}</a>',
                        'options' => ['class' => 'treeview']
                    ],
//                    [
//                        'label' => 'Some tools',
//                        'icon' => 'share',
//                        'url' => '#',
//                        'items' => [
//                            ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
//                            ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
//                            [
//                                'label' => 'Level One',
//                                'icon' => 'circle-o',
//                                'url' => '#',
//                                'items' => [
//                                    ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
//                                    [
//                                        'label' => 'Level Two',
//                                        'icon' => 'circle-o',
//                                        'url' => '#',
//                                        'items' => [
//                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
//                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
//                                        ],
//                                    ],
//                                ],
//                            ],
//                        ],
//                    ],
                ],
            ]
        ) ?>

    </section>
</aside>
<?php
$url = Url::to(['/admin/default/files-manager']);
$js = <<< JS
$('#link-files-manager').click(function() {
    $.pjax({
        type: "GET",
        url: "$url",
        container: "#pjaxModalUniversal",
        push: false,
        timeout: 10000,
        scrollTo: false
    });
});
JS;
$this->registerJs($js);
?>
