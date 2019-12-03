<?php

use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\widgets\LinkPager;
$list = [
    '0' => 'slider-img one-img',
    '1' => 'slider-img two-img',
    '2' => 'slider-img three-img',
];
$k = array_rand($list);
$v = $list[$k];

if(! empty($popular)){
    $article = array_rand($popular);
    $print = $popular[$article];
}
?>
<!-- banner -->
<div class="banner-silder">
    <div id="JiSlider" class="jislider">
        <ul>
            <li>
                <div class="w3layouts-banner-top">

                    <div class="container">
                        <div class="agileits-banner-info">
                            <!---->
                            <!--                            <h3>Welcome to cityline</h3>-->
                            <!--                            <p>Sit amet neque semper euismod.</p>-->

                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="w3layouts-banner-top w3layouts-banner-top1">
                    <div class="container">
                        <div class="agileits-banner-info">

                            <!--                            <h3>Time to go Digital</h3>-->
                            <!--                            <p>Amet sit neque semper euismod.</p>-->

                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="w3layouts-banner-top w3layouts-banner-top2">
                    <div class="container">
                        <div class="agileits-banner-info">
                            <!--                            <h3>Enjoy free live TV</h3>-->
                            <!--                            <p>Neque amet sit semper euismod.</p>-->
                        </div>

                    </div>
                </div>
            </li>
            <li>
                <div class="w3layouts-banner-top w3layouts-banner-top3">
                    <div class="container">
                        <div class="agileits-banner-info">
                            <!--                            <h3>Exclusive Digital services</h3>-->
                            <!--                            <p>Semper neque amet sit euismod.</p>-->

                        </div>

                    </div>
                </div>
            </li>

        </ul>
    </div>
</div>
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
    <!--		<div class="w3ls-section markets" id="markets">-->
    <!--			<div class="markets-grids">-->
    <!--				<div class="col-md-3 col-sm-6 col-xs-6 w3ls-markets-grid text-center">-->
    <!--					<div class="agileits-icon-grid">-->
    <!--						<div class="icon-left">-->
    <!--							<i class="fa fa-wifi" aria-hidden="true"></i>-->
    <!--						</div>-->
    <!--						<div class="icon-right">-->
    <!--							<h5>Suspendisse</h5>-->
    <!--							<p>Phasellus dapibus felis elit, sed accumsan arcu gravida vitae.</p>-->
    <!--						</div>-->
    <!--						<div class="clearfix"> </div>-->
    <!--					</div>-->
    <!--				</div>-->
    <!--				<div class="col-md-3 col-sm-6 col-xs-6 w3ls-markets-grid text-center">-->
    <!--					<div class="agileits-icon-grid">-->
    <!--						<div class="icon-left">-->
    <!--							<i class="fa fa-cog" aria-hidden="true"></i>-->
    <!--						</div>-->
    <!--						<div class="icon-right">-->
    <!--							<h5>Aliquam</h5>-->
    <!--							<p>Phasellus dapibus felis elit, sed accumsan arcu gravida vitae.</p>-->
    <!--						</div>-->
    <!--						<div class="clearfix"> </div>-->
    <!--					</div>-->
    <!--				</div>-->
    <!--				<div class="col-md-3 col-sm-6 col-xs-6 w3ls-markets-grid text-center">-->
    <!--					<div class="agileits-icon-grid">-->
    <!--						<div class="icon-left">-->
    <!--							<i class="fa fa-television" aria-hidden="true"></i>-->
    <!--						</div>-->
    <!--						<div class="icon-right">-->
    <!--							<h5>Consectetur</h5>-->
    <!--							<p>Phasellus dapibus felis elit, sed accumsan arcu gravida vitae.</p>-->
    <!--						</div>-->
    <!--						<div class="clearfix"> </div>-->
    <!--					</div>-->
    <!--				</div>-->
    <!--				<div class="col-md-3 col-sm-6 col-xs-6 w3ls-markets-grid text-center">-->
    <!--					<div class="agileits-icon-grid">-->
    <!--						<div class="icon-left">-->
    <!--							<i class="fa fa-tasks" aria-hidden="true"></i>-->
    <!--						</div>-->
    <!--						<div class="icon-right">-->
    <!--							<h5>Bibendum</h5>-->
    <!--							<p>Phasellus dapibus felis elit, sed accumsan arcu gravida vitae.</p>-->
    <!--						</div>-->
    <!--						<div class="clearfix"> </div>-->
    <!--					</div>-->
    <!--				</div>-->
    <!--				<div class="clearfix"> </div>-->
    <!--			</div>-->
    <!--		</div>-->
    <!-- //markets -->

    <!-- offers -->
    <!--		<div class="w3ls-section offers">-->
    <!--			<div class="offers-grids">-->
    <!--				<div class="wthree-offers-right">-->
    <!--					<div class="col-md-7  col-sm-8 col-xs-8 wthree-offers1-right">-->
    <!--						<h4>CityLine | Digital Networks Broadband</h4>-->
    <!--						<p>Phasellus dapibus felis elit, sed accumsan arcu gravida vitae.</p>-->
    <!--						<ul>-->
    <!--							<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Phasellus sem leo, interdum quis risus</a></li>-->
    <!--							<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Nullam egestas nisi id malesuada aliquet </a></li>-->
    <!--							<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Donec condimentum purus urna venenatis</a></li>-->
    <!--							<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Ut congue, nisl id tincidunt lobor mollis</a></li>-->
    <!--							<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Cum sociis natoque penatibus et magnis</a></li>-->
    <!--						</ul>-->
    <!--					</div>-->
    <!--					<div class="col-md-5 col-sm-4  col-xs-4 wthree-offers1">-->
    <!--						<img src="public/images/bg.jpg" alt="" class="img-responsive" />-->
    <!--					</div>-->
    <!---->
    <!--					<div class="clearfix"> </div>-->
    <!--				</div>-->
    <!--				<div class="w3ls-offers-main">-->
    <!--					<div class="col-md-5  col-sm-4 col-xs-4 wthree-offers1">-->
    <!--						<img src="public/images/sat.png" alt="" class="img-responsive" />-->
    <!--					</div>-->
    <!--					<div class="col-md-7  col-sm-8 col-xs-8 wthree-offers-left">-->
    <!--						<div class="offers-left-heading">-->
    <!--							<h4>CityLine | Digital Networks DTH</h4>-->
    <!--							<h5>Phasellus dapibus felis elit, sed accumsan arcu gravida vitae.</h5>-->
    <!--						</div>-->
    <!--						<div class="offers-left-grids">-->
    <!--							<div class="offers-number">-->
    <!--								<p>1</p>-->
    <!--							</div>-->
    <!--							<div class="offers-text">-->
    <!--								<p>Integer egestas non lorem eget aliquet. Nulla egestas felis et maximus elementum. Morbi a dui ac nunc mollis rhoncus.</p>-->
    <!--							</div>-->
    <!--							<div class="clearfix"> </div>-->
    <!--						</div>-->
    <!--						<div class="offers-left-grids offers-left-middle">-->
    <!--							<div class="offers-number">-->
    <!--								<p>2</p>-->
    <!--							</div>-->
    <!--							<div class="offers-text">-->
    <!--								<p>Integer egestas non lorem eget aliquet. Nulla egestas felis et maximus elementum. Morbi a dui ac nunc mollis rhoncus.</p>-->
    <!--							</div>-->
    <!--							<div class="clearfix"> </div>-->
    <!--						</div>-->
    <!--						<div class="offers-left-grids">-->
    <!--							<div class="offers-number">-->
    <!--								<p>3</p>-->
    <!--							</div>-->
    <!--							<div class="offers-text">-->
    <!--								<p>Integer egestas non lorem eget aliquet. Nulla egestas felis et maximus elementum. Morbi a dui ac nunc mollis rhoncus.</p>-->
    <!--							</div>-->
    <!--							<div class="clearfix"> </div>-->
    <!--						</div>-->
    <!--					</div>-->
    <!--					<div class="clearfix"> </div>-->
    <!--				</div>-->
    <!--			</div>-->
    <!--		</div>-->
    <!-- offers -->
    <!--		<div class="service-bottom">-->
    <!--				<div class="services-w3ls-row agileits-w3layouts">-->
    <!--					<div class="col-md-3 col-sm-3 col-xs-6 services-grid agileits-w3layouts text-center">-->
    <!--						<i class="fa fa-envelope-o" aria-hidden="true"></i>-->
    <!--						<h5>Inquiry</h5>-->
    <!---->
    <!--					</div>-->
    <!--					<div class="col-md-3 col-sm-3 col-xs-6 services-grid agileits-w3layouts text-center">-->
    <!--						<i class="fa fa-comments" aria-hidden="true"></i>-->
    <!--						<h5>24/7 Support</h5>-->
    <!---->
    <!--					</div>-->
    <!--					<div class="col-md-3 col-sm-3 col-xs-6 services-grid agileits-w3layouts text-center">-->
    <!--						<i class="fa fa-question" aria-hidden="true"></i>-->
    <!--						<h5>faqs</h5>-->
    <!---->
    <!--					</div>-->
    <!--					<div class="col-md-3 col-sm-3 col-xs-6 services-grid agileits-w3layouts text-center">-->
    <!--						<i class="fa fa-list-alt" aria-hidden="true"></i>-->
    <!--						<h5>quick pay bill</h5>-->
    <!---->
    <!--					</div>-->
    <!--					<div class="clearfix"> </div>-->
    <!--				</div>-->
    <!--			</div>-->
</div>
<!-- //banner -->
<!-- Slideshow 4 -->
<?php //if(!empty($print)) : ?>
<!--    <div class="slider">-->
<!--        <div class="callbacks_container">-->
<!--            <ul class="rslides" id="slider4">-->
<!--                <li>-->
<!--                    <div class="--><?//= $v;?><!--">-->
<!--                        <div class="container">-->
<!--                            <div class="slider-info ">-->
<!--                                <h5>--><?//= $print->title ?><!--</h5>-->
<!--                                <div class="bottom-info">-->
<!--                                    <p>--><?//= $print->description ?><!--</p>-->
<!--                                </div>-->
<!--                                <div class="outs_more-buttn">-->
<!--                                    <a href="--><?//= Url::toRoute(['site/view','id'=>$print->id]);?><!--">Подробнее ..</a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </div>-->
<!---->
<!--        <div class="clearfix"></div>-->
<!--    </div>-->
<?php //endif; ?>
    <!-- //Blog -->
<!--    <section class="py-md-3 py-sm-3 py-3">-->
<!--        <div class="container-fluid">-->
<!--            <div class="row">-->
<!--                <div class="col-lg-8">-->
<!--                    --><?php //foreach ($articles as $article): ?>
<!--                        <div class="blog-text">-->
<!--                            --><?php //if(isset($article->image)) : ?>
<!--                                <div class="blog-two-img">-->
<!--                                    <a href="--><?//= Url::toRoute(['site/view','id'=>$article->id]);?><!--">-->
<!--                                        <img src="--><?//= $article->getImage(); ?><!--" class="img-fluid" alt="" style="width: 100%">-->
<!--                                    </a>-->
<!--                                </div>-->
<!--                            --><?php //endif; ?>
<!--                        <div class="blog-agile-text-middle">-->
<!--                            <a href="--><?//= Url::toRoute(['site/view','id'=>$article->id]);?><!--" class="text-muted" >-->
<!--                                <h4 class="h4">--><?//= $article->title ?><!-- </h4>-->
<!--                            </a>-->
<!--                            --><?php //if(! empty($article->category)) : ?>
<!--                                <a href="--><?//= Url::toRoute(['site/category','id'=>$article->category->id]);?><!--" class="text-muted" >-->
<!--                                    <h5 class="pt-3">--><?//= $article->category->title ?><!-- </h5>-->
<!--                                </a>-->
<!--                            --><?php //endif; ?>
<!--                            <h6 class="news-date-list text-sm-left">--><?//= $article->description ?><!--</h6>-->
<!--                            <div class="news-date-list text-sm-right">-->
<!--                                <ul>-->
<!--                                    <li>-->
<!--                                        <a href="--><?//= Url::toRoute(['site/view','id'=>$article->id]);?><!--" class="text-muted">--><?//= $article->getPublishDate(); ?>
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li>-->
<!--                                        <a href="--><?//= Url::toRoute(['site/view','id'=>$article->id]);?><!--" class="text-muted" >--><?//= $article->viewed ?><!-- просмотров-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li>-->
<!--                                        <a href="--><?//= Url::toRoute(['site/view','id'=>$article->id]);?><!--" class="text-muted" >--><?//= $article->getCountTags(); ?><!-- Тэгов</a>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                            <div class="row blog-img-center">-->
<!--                                <div class="col-lg-6 col-md-6 col-sm-6 outs_more-buttn">-->
<!--                                    <a href="--><?//= Url::toRoute(['site/view','id'=>$article->id]);?><!--">Читать далее</a>-->
<!--                                </div>-->
<!--                                <div class="col-lg-6 col-md-6 col-sm-6 icons text-sm-right mt-3">-->
<!--                                    <ul>-->
<!--                                        <li><a href="http://facebook.com/"><span class="fab fa-facebook-f"></span></a></li>-->
<!--                                        <li><a href="http://linkedin.com/"><span class="fab fa-linkedin"></span></a></li>-->
<!--                                        <li><a href="http://twitter.com/"><span class="fab fa-twitter"></span></a></li>-->
<!--                                        <li><a href="http://plus.google.com/"><span class="fab fa-google-plus"></span> </a></li>-->
<!--                                    </ul>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    --><?php //endforeach; ?>
                    <!-- pagination-blog-->
<!--                    <div class="pagination-blog">-->
<!--                        <nav aria-label="Page navigation example">-->
<!--                            --><?php //echo LinkPager::widget([
//                                'pagination' => $pagination,
////                          'lastPageLabel' => 'Последняя',
////                          'firstPageLabel' => 'Первая',
////                                'nextPageLabel' => 'Следущая',
////                                'prevPageLabel' => 'Предыдущая',
////                                'hideOnSinglePage' => true,
////                                'linkOptions' => [
////                                    'class' => 'page-link',
////                                ],
//                                //Css option for container
//                                'options' => ['class' => ''],
//                                //First option value
//                                'firstPageLabel' => '&nbsp;',
//                                //Last option value
//                                'lastPageLabel' => '&nbsp;',
//                                //Previous option value
//                                'prevPageLabel' => '<',
//                                //Next option value
//                                'nextPageLabel' => '>',
//                                //Current Active option value
//                                'activePageCssClass' => 'p-active',
//                                //Max count of allowed options
//                                'maxButtonCount' => 3,
//
//                                // Css for each options. Links
//                                'linkOptions' => ['class' => ''],
////                                'disabledPageCssClass' => 'disabled',
//
//                                // Customzing CSS class for navigating link
//                                'prevPageCssClass' => 'p-back',
//                                'nextPageCssClass' => 'p-next',
//                                'firstPageCssClass' => 'p-first',
//                                'lastPageCssClass' => 'p-last',
//
//                            ]);?>
<!--                        </nav>-->
<!--                    </div>-->
                    <!-- //pagination-blog-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-4">-->
                    <!--Categories-->
<!--                    <div class="mt-lg-4 mt-3 address_mail_footer_grids">-->
<!--                        <div class="title text-center mb-lg-4 mb-md-3 mb-3">-->
<!--                            <h3>Рубрики</h3>-->
<!--                        </div>-->
<!--                        <div class="agile-categories-list text-center">-->
<!--                            <ul>-->
<!--                                --><?php //foreach ($categories as $category ): ?>
<!--                                    --><?php //if(!empty($category->id)) : ?>
<!--                                        <li class="py-2">-->
<!--                                            <a href="--><?//= Url::toRoute(['site/category','id'=>$category->id]);?><!--">--><?//= $category->title ?><!--</a>-->
<!--                                            <span class="post-count pull-right"> (--><?//= $category->getArticlesCount();?><!--)</span>-->
<!--                                        </li>-->
<!--                                    --><?php //endif; ?>
<!--                                --><?php //endforeach; ?>
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
                    <!--//Categories-->
                    <!--Tags-->
<!--                    <div class="mt-lg-4 mt-3 address_mail_footer_grids">-->
<!--                        <div class="title text-center mb-lg-4 mb-md-3 mb-3">-->
<!--                            <h3>Метки</h3>-->
<!--                        </div>-->
<!--                        <div class="tages-w3layouts-list text-center">-->
<!--                            <ul >-->
<!--                                --><?php //foreach ($tags as $tag ): ?>
<!--                                    --><?php //if(!empty($tag->id)) : ?>
<!--                                        <li class="py-2">-->
<!--                                            <a href="--><?//= Url::toRoute(['site/tag','id'=>$tag['id']]);?><!--">--><?//= $tag['title']; ?><!--</a>-->
<!--                                        </li>-->
<!--                                    --><?php //endif; ?>
<!--                                --><?php //endforeach; ?>
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
                    <!--//Tags-->
                    <!--Популярные посты-->
<!--                    <div class="mt-lg-4 mt-3 address_mail_footer_grids">-->
<!--                        <div class="title text-center mb-lg-4 mb-md-3 mb-3">-->
<!--                            <h3>Популярные статьи</h3>-->
<!--                        </div>-->
<!--                        <div class="dance-agile-info  articles-text-center">-->
<!--                            <ul>-->
<!--                                --><?php //foreach ($popular as $article): ?>
<!--                                <li>-->
<!--                                    <div class="footer-grid row  mb-3">-->
<!--                                        --><?php //if($article->image) : ?>
<!--                                             <div class="col-lg-4 col-md-6 col-sm-6 col-5 text-right">-->
<!--                                                <a href="--><?//= Url::toRoute(['site/view','id'=>$article->id]);?><!--">-->
<!--                                                     <img class="img-fluid" src="--><?//= $article->getImage();?><!--" alt="" >-->
<!--                                                </a>-->
<!--                                            </div>-->
<!--                                            <div class="col-lg-8 col-md-6 col-sm-6 col-7 bottom-para px-0">-->
<!--                                                <h6><a href="--><?//= Url::toRoute(['site/view','id'=>$article->id]);?><!--" class="scroll">--><?//= $article->title; ?><!--</a></h6>-->
<!--                                                <div class="news-date-list pt-2">-->
<!--                                                    <ul>-->
<!--                                                        <li><a href="--><?//= Url::toRoute(['site/view','id'=>$article->id]);?><!--" class="clr-two">--><?//= $article->getPublishDate(); ?><!--</a></li>-->
<!--                                                        <li><a href="--><?//= Url::toRoute(['site/view','id'=>$article->id]);?><!--" class="clr-two">--><?//= $article->getCountTags(); ?><!-- меток</a></li>-->
<!--                                                    </ul>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        --><?php //else: ?>
<!--                                            <div class=" text-center col-lg-12 col-md-12 col-sm-12 col-12 bottom-para">-->
<!--                                                <h6><a href="--><?//= Url::toRoute(['site/view','id'=>$article->id]);?><!--" class="text-center scroll">--><?//= $article->title; ?><!--</a></h6>-->
<!--                                                <div class=" text-center news-date-list pt-2">-->
<!--                                                    <ul>-->
<!--                                                        <li><a href="--><?//= Url::toRoute(['site/view','id'=>$article->id]);?><!--" class="clr-two">--><?//= $article->getPublishDate(); ?><!--</a></li>-->
<!--                                                        <li><a href="--><?//= Url::toRoute(['site/view','id'=>$article->id]);?><!--" class="clr-two">--><?//= $article->getCountTags(); ?><!-- меток</a></li>-->
<!--                                                    </ul>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        --><?php //endif; ?>
<!--                                    </div>-->
<!--                                </li>-->
<!--                                --><?php //endforeach; ?>
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
                    <!--//Популярные посты-->
                    <!--Последние посты-->
<!--                    <div class="mt-lg-4 mt-3 address_mail_footer_grids">-->
<!--                        <div class="title text-center mb-lg-4 mb-md-3 mb-3">-->
<!--                            <h3>Новые статьи</h3>-->
<!--                        </div>-->
<!--                        <div class="dance-agile-info articles-text-center">-->
<!--                            <ul>-->
<!--                                --><?php //foreach ($recent as $article): ?>
<!--                                    <li>-->
<!--                                        <div class="footer-grid row  mb-3">-->
<!--                                            --><?php //if($article->image) : ?>
<!--                                                <div class="col-lg-4 col-md-6 col-sm-6 col-5 text-right">-->
<!--                                                    <a href="--><?//= Url::toRoute(['site/view','id'=>$article->id]);?><!--">-->
<!--                                                        <img class="img-fluid" src="--><?//= $article->getImage();?><!--" alt="" >-->
<!--                                                    </a>-->
<!--                                                </div>-->
<!--                                                <div class="col-lg-8 col-md-6 col-sm-6 col-7 bottom-para px-0">-->
<!--                                                    <h6><a href="--><?//= Url::toRoute(['site/view','id'=>$article->id]);?><!--" class="scroll">--><?//= $article->title; ?><!--</a></h6>-->
<!--                                                    <div class="news-date-list pt-2">-->
<!--                                                        <ul>-->
<!--                                                            <li><a href="--><?//= Url::toRoute(['site/view','id'=>$article->id]);?><!--" class="clr-two">--><?//= $article->getPublishDate(); ?><!--</a></li>-->
<!--                                                            <li><a href="--><?//= Url::toRoute(['site/view','id'=>$article->id]);?><!--" class="clr-two">--><?//= $article->getTags()->select('id')->asArray()->count(); ?><!-- Tags</a></li>-->
<!--                                                        </ul>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            --><?php //else: ?>
<!--                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12 bottom-para">-->
<!--                                                    <h6><a href="--><?//= Url::toRoute(['site/view','id'=>$article->id]);?><!--" class="scroll">--><?//= $article->title; ?><!--</a></h6>-->
<!--                                                    <div class="news-date-list pt-2">-->
<!--                                                        <ul>-->
<!--                                                            <li><a href="--><?//= Url::toRoute(['site/view','id'=>$article->id]);?><!--" class="clr-two">--><?//= $article->getPublishDate(); ?><!--</a></li>-->
<!--                                                            <li><a href="--><?//= Url::toRoute(['site/view','id'=>$article->id]);?><!--" class="clr-two">--><?//= $article->getTags()->select('id')->asArray()->count(); ?><!-- Tags</a></li>-->
<!--                                                        </ul>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            --><?php //endif; ?>
<!--                                        </div>-->
<!--                                    </li>-->
<!--                                --><?php //endforeach; ?>
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
                    <!--//Последние посты-->
                    <!--Contact Us-->
<!--                    <div class="mt-lg-4 mt-3 address_mail_footer_grids">-->
<!--                        <div class="title text-center mb-lg-4 mb-md-3 mb-3">-->
<!--                            <h3>Свяжитесь с нами</h3>-->
<!--                        </div>-->
<!--                            --><?php //$form = ActiveForm::begin([
//                                'action'=>['site/contact-us'],
//                                'options'=>['class'=>'pt-lg-2',
//                                    'role'=>'form'
//                                ]])
//                            ?>
<!--                                <div class=" contact-wls-detail">-->
<!--                                    <div class="agile-wls-contact-mid">-->
<!--                                        <div class="form-group contact-forms">-->
<!--                                            --><?//= $form->field($contactUsForm, 'name')->textInput(['class'=>'form-control','placeholder'=>'Имя'])->label(false) ?>
<!--                                        </div>-->
<!--                                        <div class="form-group contact-forms">-->
<!--                                            --><?//= $form->field($contactUsForm, 'email')->textInput(['class'=>'form-control','placeholder'=>'Email'])->label(false) ?>
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="countact-text">-->
<!--                                        <div class="form-group contact-forms">-->
<!--                                            --><?//= $form->field($contactUsForm, 'body')->textarea(['class'=>'form-control','placeholder'=>'Комментарий'])->label(false)?>
<!--                                        </div>-->
<!--                                            <button type="submit" class="btn sent-butnn">Отправить</button>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                        --><?php //ActiveForm::end();?>
<!--                        </div>-->
<!--                    </div>-->
                    <!--//Contact Us-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
    <!-- //Blog -->
    <!--Gallery-->
<!--<section class="py-lg-5 py-md-4 py-sm-3 py-3">-->
<!--    <div class="container-fluid">-->
<!--        <div class="hover12">-->
<!--            <ul id="flexiselDemo3">-->
<!--                <li>-->
<!--                    <div class=" snap-img">-->
<!--                        <div class=" agileits_w3layouts_gallery_grid1 hover08">-->
<!--                            <div class="w3_agile_gallery_effect">-->
<!--                                <a href="public/images/g3.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">-->
<!--                                    <figure>    <img src="public/images/g3.jpg" alt=" " class="img-fluid"> </figure>-->
<!--                                </a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <div class="snap-img">-->
<!--                        <div class=" agileits_w3layouts_gallery_grid1 hover08">-->
<!--                            <div class="w3_agile_gallery_effect">-->
<!--                                <a href="public/images/g1.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">-->
<!--                                    <figure>    <img src="public/images/g1.jpg" alt=" " class="img-fluid"> </figure>-->
<!--                                </a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <div class=" snap-img">-->
<!--                        <div class="agileits_w3layouts_gallery_grid1 hover08">-->
<!--                            <div class="w3_agile_gallery_effect">-->
<!--                                <a href="public/images/g4.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">-->
<!--                                    <figure>    <img src="public/images/g4.jpg" alt=" " class="img-fluid"> </figure>-->
<!--                                </a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <div class="snap-img">-->
<!--                        <div class="agileits_w3layouts_gallery_grid1 hover08">-->
<!--                            <div class="w3_agile_gallery_effect">-->
<!--                                <a href="public/images/g2.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">-->
<!--                                    <figure>    <img src="public/images/g2.jpg" alt=" " class="img-fluid"> </figure>-->
<!--                                </a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="clearfix"></div>-->
<!--</section>-->
    <!--//Gallery-->

