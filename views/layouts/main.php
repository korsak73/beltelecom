<?php
use app\assets\BeltelecomAsset;
use app\common\widgets\ScrollWidget;
use yii\helpers\Html;
use yii\widgets\Pjax;

BeltelecomAsset::register($this);

/* @var $content string */
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
<body>
<?php $this->beginBody() ?>

<?php echo $this->render('header-main.php')?>

<?= $content ?>

<footer>
    <?=$this->render('footer.php')?>
</footer>
<?php Pjax::begin(['id' => 'pjaxModalUniversal']); ?><?php Pjax::end(); ?>
<?php Pjax::begin(['id' => 'pjaxModalUniversal2']); ?><?php Pjax::end(); ?>

<script src="public/js/JiSlider.js"></script>
<script>
    $(window).load(function () {
        $('#JiSlider').JiSlider({
            color: '#fff',
            start:1,
            reverse: false
        }).addClass('ff')
    })
</script>
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
</script>

    <!--кнопка вверх-->
    <?= ScrollWidget::widget() ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>