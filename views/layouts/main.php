
<?php
/* @var $content string */

use app\assets\AppAsset;
use app\assets\BeltelecomAsset;
use app\common\widgets\ScrollWidget;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Pjax;

//AppAsset::register($this);
BeltelecomAsset::register($this);
//AppAsset::register($this);
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
        <script type="application/x-javascript">
            // addEventListener("load", function () {
            //     setTimeout(hideURLbar, 0);
            // }, false);
            //
            // function hideURLbar() {
            //     window.scrollTo(0, 1);
            // }
        </script>
        <!-- //for-mobile-apps -->
<!--        <link href="public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />-->
        <!-- services -->
        <!-- pop-up -->
<!--        <link href="public/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />-->
        <!-- //pop-up -->
<!--        <link href="public/css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />-->
        <!-- //services -->
<!--        <link href="public/css/JiSlider.css" rel="stylesheet">-->
<!--        <link href="public/css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />-->
<!--        <link href="public/css/style.css" rel="stylesheet" type="text/css" media="all" />-->
        <!-- js -->
<!--        <script src="public/js/jquery-2.2.3.min.js"></script>-->
        <!--/js-->
<!--        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'-->
<!--              rel='stylesheet' type='text/css'>-->
<!--        <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic'-->
<!--              rel='stylesheet' type='text/css'>-->
        <!-- nav smooth scroll -->
        <script>
            // $(document).ready(function(){
            //     $(".dropdown").hover(
            //         function() {
            //             $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            //             $(this).toggleClass('open');
            //         },
            //         function() {
            //             $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            //             $(this).toggleClass('open');
            //         }
            //     );
            // });
        </script>
    </head>
<body>
<?php $this->beginBody() ?>

<?php echo $this->render('header-main.php')?>

<?= $content ?>

	  <!-- Modal1 -->
<!--					<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" >-->
<!---->
<!--							<div class="modal-dialog">-->
							<!-- Modal content-->
<!--								<div class="modal-content">-->
<!--									<div class="modal-header">-->
<!--										<button type="button" class="close" data-dismiss="modal">&times;</button>-->
<!--										<h4>Login</h4>-->
<!--										<div class="login-form">-->
<!--											<form action="#" method="post">-->
<!--												<input type="email" name="email" placeholder="E-mail" required="">-->
<!--												<input type="password" name="password" placeholder="Password" required="">-->
<!--												<div class="tp">-->
<!--													<input type="submit" value="LOGIN NOW">-->
<!--												</div>-->
<!--												<div class="forgot-grid">-->
<!--												       <div class="log-check">-->
<!--														<label class="checkbox"><input type="checkbox" name="checkbox">Remember me</label>-->
<!--														</div>-->
<!--														<div class="forgot">-->
<!--															<a href="#" data-toggle="modal" data-target="#myModal2">Forgot Password?</a>-->
<!--														</div>-->
<!--														<div class="clearfix"></div>-->
<!--													</div>-->
<!--												-->
<!--											</form>-->
<!--										</div>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--						</div>-->
				<!-- //Modal1 -->
				  <!-- Modal1 -->
<!--					<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" >-->
<!---->
<!--							<div class="modal-dialog">-->
							<!-- Modal content-->
<!--								<div class="modal-content">-->
<!--									<div class="modal-header">-->
<!--										<button type="button" class="close" data-dismiss="modal">&times;</button>-->
<!--										<h4>Register</h4>-->
<!--										<div class="login-form">-->
<!--											<form action="#" method="post">-->
<!--											    <input type="text" name="name" placeholder="Name" required="">-->
<!--												<input type="email" name="email" placeholder="E-mail" required="">-->
<!--												<input type="password" name="password" placeholder="Password" required="" id="password1">-->
<!--												<input type="password" name="conform password" placeholder="Confirm Password" required="" id="password2">-->
<!--												<div class="signin-rit">-->
<!--													<span class="agree-checkbox">-->
<!--														<label class="checkbox"><input type="checkbox" name="checkbox">I agree to your <a class="w3layouts-t" href="terms.html">Terms of Use</a> and <a class="w3layouts-t" href="privacy.html" target="_blank">Privacy Policy</a></label>-->
<!--													</span>-->
<!--												</div>-->
<!--												<div class="tp">-->
<!--													<input type="submit" value="REGISTER NOW">-->
<!--												</div>-->
<!--											</form>-->
<!--										</div>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--						</div>-->
				<!-- //Modal1 -->
<footer>
    <?=$this->render('footer.php')?>
</footer>
<?php //Pjax::begin(['id' => 'pjaxModalUniversal']); ?><!----><?php //Pjax::end(); ?>
<?php //Pjax::begin(['id' => 'pjaxModalUniversal2']); ?><!----><?php //Pjax::end(); ?>
<!--<div id="pjax-reload-block" class="display-none">-->
<!--    <div class="pjax-reload-block">-->
<!--        <div class="sk-spinner sk-spinner-fading-circle">-->
<!--            <div class="sk-circle1 sk-circle"></div>-->
<!--            <div class="sk-circle2 sk-circle"></div>-->
<!--            <div class="sk-circle3 sk-circle"></div>-->
<!--            <div class="sk-circle4 sk-circle"></div>-->
<!--            <div class="sk-circle5 sk-circle"></div>-->
<!--            <div class="sk-circle6 sk-circle"></div>-->
<!--            <div class="sk-circle7 sk-circle"></div>-->
<!--            <div class="sk-circle8 sk-circle"></div>-->
<!--            <div class="sk-circle9 sk-circle"></div>-->
<!--            <div class="sk-circle10 sk-circle"></div>-->
<!--            <div class="sk-circle11 sk-circle"></div>-->
<!--            <div class="sk-circle12 sk-circle"></div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<!--				<script type="text/javascript">-->
<!--					window.onload = function () {-->
<!--						document.getElementById("password1").onchange = validatePassword;-->
<!--						document.getElementById("password2").onchange = validatePassword;-->
<!--					}-->
<!--					function validatePassword(){-->
<!--						var pass2=document.getElementById("password2").value;-->
<!--						var pass1=document.getElementById("password1").value;-->
<!--						if(pass1!=pass2)-->
<!--							document.getElementById("password2").setCustomValidity("Passwords Don't Match");-->
<!--						else-->
<!--							document.getElementById("password2").setCustomValidity('');-->
<!--							//empty string means no validation error-->
<!--					}-->
<!---->
<!--			</script>-->
<!--<script src="public/js/SmoothScroll.min.js"></script>-->
<!--	 //js -->
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
<!--	<script type="text/javascript">-->
<!--		var _gaq = _gaq || [];-->
<!--		_gaq.push(['_setAccount', 'UA-36251023-1']);-->
<!--		_gaq.push(['_setDomainName', 'jqueryscript.net']);-->
<!--		_gaq.push(['_trackPageview']);-->
<!---->
<!--		(function () {-->
<!--			var ga = document.createElement('script');-->
<!--			ga.type = 'text/javascript';-->
<!--			ga.async = true;-->
<!--			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';-->
<!--			var s = document.getElementsByTagName('script')[0];-->
<!--			s.parentNode.insertBefore(ga, s);-->
<!--		})();-->
<!--	</script>-->
<!--	<script src="public/js/SmoothScroll.min.js"></script>-->


	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
<!--	<script src="public/js/bootstrap.js"></script>-->


<!--</body>-->
<!---->
<!--</html>-->

<?php
    $script = <<< JS

	window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove();
    });
    }, 3000);

    $(document).ready(function(){
        $(".dropdown").hover(
            function() {
                $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
                $(this).toggleClass('open');
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
    
    addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
           
        }, false);

    function hideURLbar() {
    	window.scrollTo(0, 1);
    };
     // element.addEventListener(handleEvent, { passive: false });
    
JS;
    //маркер конца строки, обязательно сразу, без пробелов и табуляции
    $this->registerJs($script, yii\web\View::POS_LOAD);
    ?>
    <!--кнопка вверх-->
    <?= ScrollWidget::widget() ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>