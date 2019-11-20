
<?php
/* @var $content string */

use app\assets\AppAsset;
use app\assets\BeltelecomAsset;
use app\common\widgets\ScrollWidget;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Pjax;

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
    </head>
<body>
<?php $this->beginBody() ?>

<?php echo $this->render('header-main.php')?>
	<!-- banner -->
	<div class="banner-silder">
		<div id="JiSlider" class="jislider">
			<ul>
				<li>
					<div class="w3layouts-banner-top">

						<div class="container">
							<div class="agileits-banner-info">

								<h3>Welcome to cityline</h3>
								<p>Sit amet neque semper euismod.</p>

							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="w3layouts-banner-top w3layouts-banner-top1">
						<div class="container">
							<div class="agileits-banner-info">

								<h3>Time to go Digital</h3>
								<p>Amet sit neque semper euismod.</p>

							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="w3layouts-banner-top w3layouts-banner-top2">
						<div class="container">
							<div class="agileits-banner-info">
								<h3>Enjoy free live TV</h3>
								<p>Neque amet sit semper euismod.</p>
							</div>

						</div>
					</div>
				</li>
				<li>
					<div class="w3layouts-banner-top w3layouts-banner-top3">
						<div class="container">
							<div class="agileits-banner-info">
								<h3>Exclusive Digital services</h3>
								<p>Semper neque amet sit euismod.</p>

							</div>

						</div>
					</div>
				</li>

			</ul>
		</div>
	</div>
	<!-- //banner -->
	<div class="container">
		<!-- services section -->
		<div class="w3ls-section w3_agileits-services" id="services">
			<h2 class="agileits-title">welcome to cityline</h2>
			<h4 class="wthree">Phasellus dapibus felis elit accumsan arcu vitae.</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor.
				Integer laoreet placerat suscipit.</p>
			<div class="agileinfo-about-main">
				<div class="col-md-8 demo">
					<div id="verticalTab">
						<ul class="resp-tabs-list">
							<li>
								<div class="tab1">
									<h3>investors</h3>
								</div>
							</li>
							<li>
								<div class="tab1">
									<h3>partners</h3>
								</div>
							</li>
							<li>
								<div class="tab1">
									<h3>vision</h3>
								</div>
							</li>
							<li>
								<div class="tab1">
									<h3>mision</h3>
								</div>
							</li>
							<li>
								<div class="tab1">
									<h3>management</h3>
								</div>

							</li>
						</ul>
						<div class="resp-tabs-container">
							<div class="tabs-right1">
								<h6>Aliquam donec id urna</h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel
									tortor. Integer laoreet placerat suscipit.</p>
								<p class="agile-tab-txt">scelerisque commodo.Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur
									nibh quis urna gravida mollis.Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel
									tortor. Integer laoreet placerat suscipit.</p>
								<div class="button">
									<a href="about.html">Get More<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a>
								</div>
							</div>
							<div class="tabs-right1">
								<h6>Aliquam donec id urna</h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel
									tortor. Integer laoreet placerat suscipit.</p>
								<p class="agile-tab-txt">scelerisque commodo.Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur
									nibh quis urna gravida mollis.Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel
									tortor. Integer laoreet placerat suscipit.</p>
								<div class="button">
									<a href="about.html">Get More<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a>
								</div>
							</div>
							<div class="tabs-right1">
								<h6>Aliquam donec id urna</h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel
									tortor. Integer laoreet placerat suscipit.</p>
								<p class="agile-tab-txt">scelerisque commodo.Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur
									nibh quis urna gravida mollis.Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel
									tortor. Integer laoreet placerat suscipit.</p>
								<div class="button">
									<a href="about.html">Get More<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a>
								</div>
							</div>
							<div class="tabs-right1">
								<h6>Aliquam donec id urna</h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel
									tortor. Integer laoreet placerat suscipit.</p>
								<p class="agile-tab-txt">scelerisque commodo.Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur
									nibh quis urna gravida mollis.Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel
									tortor. Integer laoreet placerat suscipit.</p>
								<div class="button">
									<a href="about.html">Get More<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a>
								</div>
							</div>
							<div class="tabs-right1">
								<h6>Aliquam donec id urna</h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel
									tortor. Integer laoreet placerat suscipit.</p>
								<p class="agile-tab-txt">scelerisque commodo.Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur
									nibh quis urna gravida mollis.Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel
									tortor. Integer laoreet placerat suscipit.</p>
								<div class="button">
									<a href="about.html">Get More<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a>
								</div>
							</div>
						</div>
					</div>
					<div style="height: 30px; clear: both"></div>
				</div>
				<div class="col-md-4 w3ls-about-right">
					<img src="public/images/home.png" class="img-responsive" alt="" />
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
<!--		<script src="public/js/easy-responsive-tabs.js"></script>-->
		<script>
			// $(document).ready(function () {
			// 	$('#horizontalTab').easyResponsiveTabs({
			// 		type: 'default', //Types: default, vertical, accordion
			// 		width: 'auto', //auto or any width like 600px
			// 		fit: true, // 100% fit in a container
			// 		closed: 'accordion', // Start closed if in accordion view
			// 		activate: function (event) { // Callback function if tab is switched
			// 			var $tab = $(this);
			// 			var $info = $('#tabInfo');
			// 			var $name = $('span', $info);
			// 			$name.text($tab.text());
			// 			$info.show();
			// 		}
			// 	});
			// 	$('#verticalTab').easyResponsiveTabs({
			// 		type: 'vertical',
			// 		width: 'auto',
			// 		fit: true
			// 	});
			// });
		</script>
		<!-- //agents section -->
		<!-- markets -->
		<div class="w3ls-section markets" id="markets">
			<div class="markets-grids">
				<div class="col-md-3 col-sm-6 col-xs-6 w3ls-markets-grid text-center">
					<div class="agileits-icon-grid">
						<div class="icon-left">
							<i class="fa fa-wifi" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>Suspendisse</h5>
							<p>Phasellus dapibus felis elit, sed accumsan arcu gravida vitae.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 w3ls-markets-grid text-center">
					<div class="agileits-icon-grid">
						<div class="icon-left">
							<i class="fa fa-cog" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>Aliquam</h5>
							<p>Phasellus dapibus felis elit, sed accumsan arcu gravida vitae.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 w3ls-markets-grid text-center">
					<div class="agileits-icon-grid">
						<div class="icon-left">
							<i class="fa fa-television" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>Consectetur</h5>
							<p>Phasellus dapibus felis elit, sed accumsan arcu gravida vitae.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 w3ls-markets-grid text-center">
					<div class="agileits-icon-grid">
						<div class="icon-left">
							<i class="fa fa-tasks" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>Bibendum</h5>
							<p>Phasellus dapibus felis elit, sed accumsan arcu gravida vitae.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //markets -->

		<!-- offers -->
		<div class="w3ls-section offers">
			<div class="offers-grids">
				<div class="wthree-offers-right">
					<div class="col-md-7  col-sm-8 col-xs-8 wthree-offers1-right">
						<h4>CityLine | Digital Networks Broadband</h4>
						<p>Phasellus dapibus felis elit, sed accumsan arcu gravida vitae.</p>
						<ul>
							<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Phasellus sem leo, interdum quis risus</a></li>
							<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Nullam egestas nisi id malesuada aliquet </a></li>
							<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Donec condimentum purus urna venenatis</a></li>
							<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Ut congue, nisl id tincidunt lobor mollis</a></li>
							<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Cum sociis natoque penatibus et magnis</a></li>
						</ul>
					</div>
					<div class="col-md-5 col-sm-4  col-xs-4 wthree-offers1">
						<img src="public/images/bg.jpg" alt="" class="img-responsive" />
					</div>

					<div class="clearfix"> </div>
				</div>
				<div class="w3ls-offers-main">
					<div class="col-md-5  col-sm-4 col-xs-4 wthree-offers1">
						<img src="public/images/sat.png" alt="" class="img-responsive" />
					</div>
					<div class="col-md-7  col-sm-8 col-xs-8 wthree-offers-left">
						<div class="offers-left-heading">
							<h4>CityLine | Digital Networks DTH</h4>
							<h5>Phasellus dapibus felis elit, sed accumsan arcu gravida vitae.</h5>
						</div>
						<div class="offers-left-grids">
							<div class="offers-number">
								<p>1</p>
							</div>
							<div class="offers-text">
								<p>Integer egestas non lorem eget aliquet. Nulla egestas felis et maximus elementum. Morbi a dui ac nunc mollis rhoncus.</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="offers-left-grids offers-left-middle">
							<div class="offers-number">
								<p>2</p>
							</div>
							<div class="offers-text">
								<p>Integer egestas non lorem eget aliquet. Nulla egestas felis et maximus elementum. Morbi a dui ac nunc mollis rhoncus.</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="offers-left-grids">
							<div class="offers-number">
								<p>3</p>
							</div>
							<div class="offers-text">
								<p>Integer egestas non lorem eget aliquet. Nulla egestas felis et maximus elementum. Morbi a dui ac nunc mollis rhoncus.</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<!-- offers -->
		<div class="service-bottom">
				<div class="services-w3ls-row agileits-w3layouts">
					<div class="col-md-3 col-sm-3 col-xs-6 services-grid agileits-w3layouts text-center">
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
						<h5>Inquiry</h5>

					</div>
					<div class="col-md-3 col-sm-3 col-xs-6 services-grid agileits-w3layouts text-center">
						<i class="fa fa-comments" aria-hidden="true"></i>
						<h5>24/7 Support</h5>

					</div>
					<div class="col-md-3 col-sm-3 col-xs-6 services-grid agileits-w3layouts text-center">
						<i class="fa fa-question" aria-hidden="true"></i>
						<h5>faqs</h5>

					</div>
					<div class="col-md-3 col-sm-3 col-xs-6 services-grid agileits-w3layouts text-center">
						<i class="fa fa-list-alt" aria-hidden="true"></i>
						<h5>quick pay bill</h5>

					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
	</div>

	  <!-- Modal1 -->
					<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" >

							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4>Login</h4>
										<div class="login-form">
											<form action="#" method="post">
												<input type="email" name="email" placeholder="E-mail" required="">
												<input type="password" name="password" placeholder="Password" required="">
												<div class="tp">
													<input type="submit" value="LOGIN NOW">
												</div>
												<div class="forgot-grid">
												       <div class="log-check">
														<label class="checkbox"><input type="checkbox" name="checkbox">Remember me</label>
														</div>
														<div class="forgot">
															<a href="#" data-toggle="modal" data-target="#myModal2">Forgot Password?</a>
														</div>
														<div class="clearfix"></div>
													</div>
												
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
				<!-- //Modal1 -->
				  <!-- Modal1 -->
					<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" >

							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4>Register</h4>
										<div class="login-form">
											<form action="#" method="post">
											    <input type="text" name="name" placeholder="Name" required="">
												<input type="email" name="email" placeholder="E-mail" required="">
												<input type="password" name="password" placeholder="Password" required="" id="password1">
												<input type="password" name="conform password" placeholder="Confirm Password" required="" id="password2">
												<div class="signin-rit">
													<span class="agree-checkbox">
														<label class="checkbox"><input type="checkbox" name="checkbox">I agree to your <a class="w3layouts-t" href="terms.html">Terms of Use</a> and <a class="w3layouts-t" href="privacy.html" target="_blank">Privacy Policy</a></label>
													</span>
												</div>
												<div class="tp">
													<input type="submit" value="REGISTER NOW">
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
				<!-- //Modal1 -->
<?//= $content ?>
				<script type="text/javascript">
					window.onload = function () {
						document.getElementById("password1").onchange = validatePassword;
						document.getElementById("password2").onchange = validatePassword;
					}
					function validatePassword(){
						var pass2=document.getElementById("password2").value;
						var pass1=document.getElementById("password1").value;
						if(pass1!=pass2)
							document.getElementById("password2").setCustomValidity("Passwords Don't Match");
						else
							document.getElementById("password2").setCustomValidity('');
							//empty string means no validation error
					}

			</script>
<script src="public/js/SmoothScroll.min.js"></script>
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
	<script src="public/js/SmoothScroll.min.js"></script>


	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="public/js/bootstrap.js"></script>


<!--</body>-->
<!---->
<!--</html>-->
<!--    --><?php //Pjax::begin(['id' => 'pjaxModalUniversal']); ?><!----><?php //Pjax::end(); ?>
<!--    --><?php //Pjax::begin(['id' => 'pjaxModalUniversal2']); ?><!----><?php //Pjax::end(); ?>
<!--    <div id="pjax-reload-block" class="display-none">-->
<!--        <div class="pjax-reload-block">-->
<!--            <div class="sk-spinner sk-spinner-fading-circle">-->
<!--                <div class="sk-circle1 sk-circle"></div>-->
<!--                <div class="sk-circle2 sk-circle"></div>-->
<!--                <div class="sk-circle3 sk-circle"></div>-->
<!--                <div class="sk-circle4 sk-circle"></div>-->
<!--                <div class="sk-circle5 sk-circle"></div>-->
<!--                <div class="sk-circle6 sk-circle"></div>-->
<!--                <div class="sk-circle7 sk-circle"></div>-->
<!--                <div class="sk-circle8 sk-circle"></div>-->
<!--                <div class="sk-circle9 sk-circle"></div>-->
<!--                <div class="sk-circle10 sk-circle"></div>-->
<!--                <div class="sk-circle11 sk-circle"></div>-->
<!--                <div class="sk-circle12 sk-circle"></div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

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
    }
    
JS;
    //маркер конца строки, обязательно сразу, без пробелов и табуляции
    $this->registerJs($script, yii\web\View::POS_LOAD);
    ?>
    <!--кнопка вверх-->
    <?= ScrollWidget::widget() ?>
<?=$this->render('footer.php')?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>