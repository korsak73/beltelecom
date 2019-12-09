<?php
use app\common\widgets\SubscriptionWidget;
use yii\helpers\Url;

/* @var $article app\models\Articles */
?>

<!-- banner -->
    <div class="w3ls-banner-single text-center">
        <div class="container">
            <h2 class="wthree-title"></h2>
            <h3 class="wthree-subtitle"></h3>
        </div>
    </div>
    <!-- //banner -->
    <!-- breadcrumbs -->
    <div class="w3layouts-breadcrumbs text-center">
        <div class="container">
            <span class="agile-breadcrumbs"><a href="<?= Url::home()?>">Главная</a> > <a href="<?= Url::to(['/site/blog'])?>">Новости</a> > <span>Подробнее</span></span>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <div class="container">	
	    <div class="w3ls-section single-page-agile-info">
            <?php if(! empty($article->category)) : ?>
                <a href="<?= Url::toRoute(['site/category','id'=>$article->category->id]);?>" class="text-muted" >
                    <h4 class="w3ls-inner-title"><?= $article->category->title ?></h4>
                </a>
            <?php endif; ?>
                   <!-- /movie-browse-agile -->
                <div class="show-top-grids-w3lagile">
				<div class="col-sm-7 single-left">
					<div class="post-media">
                        <?php if($article->image) : ?>
						    <img src="<?= $article->getImage(); ?>" class="img-responsive" alt="">
                        <?php endif; ?>
						  <div class="blog-text">
							<h3 class="h-t"><?=  $article->title ?></h3></a>
							  <div class="entry-meta">
                                  <a href="<?= Url::toRoute(['site/view','id'=>$article->id]);?>">
                                      <h6 class="blg"><i class="fa fa-clock-o"></i> <?= $article->getPublishDate(); ?></h6>
                                  </a>
									<div class="icons">
										<a href="<?= Url::toRoute(['site/view','id'=>$article->id]);?>"><i class="fa fa-user"></i> <?= empty($article->nameAutor) ? null : $article->nameAutor ?></a>
										<a href="#"><i class="fa fa-comments-o"></i> 2</a>
										<a href="<?= Url::toRoute(['site/view','id'=>$article->id]);?>""><i class="fa fa-thumbs-o-up"></i> <?= $article->getCountTags(); ?> тэгов</a>
										<a href="#"><i class="fa fa-thumbs-o-down"></i>  26</a>
									</div>
									<div class="clearfix"></div>
                                      <?php if(! empty($article->content)) : ?>
                                          <p><?= $article->content ?></p>
                                      <?php endif; ?>
							  </div>
						  </div>
					</div>
						<div class="song-grid-right">
						<div class="share">
							<h5>Поделится</h5>
							<div class="single-agile-shar-buttons">
							<ul>
								<li>
									<div class="fb-like fb_iframe_widget" data-href="https://www.facebook.com/w3layouts" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=&amp;container_width=0&amp;href=https%3A%2F%2Fwww.facebook.com%2Fw3layouts&amp;layout=button_count&amp;locale=en_GB&amp;sdk=joey&amp;share=false&amp;show_faces=false&amp;size=small"><span style="vertical-align: top; width: 0px; height: 0px; overflow: hidden;"><iframe name="f2d4069dd7c5844" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/v2.7/plugins/like.php?action=like&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FXBwzv5Yrm_1.js%3Fversion%3D42%23cb%3Df9ea263d24bf8%26domain%3Dp.w3layouts.com%26origin%3Dhttps%253A%252F%252Fp.w3layouts.com%252Ff16922fe3409b58%26relation%3Dparent.parent&amp;container_width=0&amp;href=https%3A%2F%2Fwww.facebook.com%2Fw3layouts&amp;layout=button_count&amp;locale=en_GB&amp;sdk=joey&amp;share=false&amp;show_faces=false&amp;size=small" style="border: none; visibility: visible; width: 0px; height: 0px;"></iframe></span></div>
									<script>(function(d, s, id) {
									  var js, fjs = d.getElementsByTagName(s)[0];
									  if (d.getElementById(id)) return;
									  js = d.createElement(s); js.id = id;
									  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.7";
									  fjs.parentNode.insertBefore(js, fjs);
									}(document, 'script', 'facebook-jssdk'));</script>
								</li>
								<li>
									<div class="fb-share-button fb_iframe_widget" data-href="https://www.facebook.com/w3layouts" data-layout="button_count" data-size="small" data-mobile-iframe="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=&amp;container_width=31&amp;href=https%3A%2F%2Fwww.facebook.com%2Fw3layouts&amp;layout=button_count&amp;locale=en_GB&amp;mobile_iframe=true&amp;sdk=joey&amp;size=small"><span style="vertical-align: top; width: 0px; height: 0px; overflow: hidden;"><iframe name="fb1666b41482e8" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:share_button Facebook Social Plugin" src="https://www.facebook.com/v2.7/plugins/share_button.php?app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FXBwzv5Yrm_1.js%3Fversion%3D42%23cb%3Df2ea1c68c434c8c%26domain%3Dp.w3layouts.com%26origin%3Dhttps%253A%252F%252Fp.w3layouts.com%252Ff16922fe3409b58%26relation%3Dparent.parent&amp;container_width=31&amp;href=https%3A%2F%2Fwww.facebook.com%2Fw3layouts&amp;layout=button_count&amp;locale=en_GB&amp;mobile_iframe=true&amp;sdk=joey&amp;size=small" style="border: none; visibility: visible; width: 0px; height: 0px;"></iframe></span></div>
								</li>
								<li class="news-twitter">
									<iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-follow-button twitter-follow-button-rendered" title="Twitter Follow Button" src="https://platform.twitter.com/widgets/follow_button.85cf65311617c356fe9237c3e6c10afb.en.html#dnt=false&amp;id=twitter-widget-0&amp;lang=en&amp;screen_name=w3layouts&amp;show_count=false&amp;show_screen_name=true&amp;size=m&amp;time=1502102422605" style="position: static; visibility: visible; width: 126px; height: 20px;" data-screen-name="w3layouts"></iframe><script async="" src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
								</li>
								<li>
									<iframe id="twitter-widget-1" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-mention-button twitter-mention-button-rendered twitter-tweet-button" title="Twitter Tweet Button" src="https://platform.twitter.com/widgets/tweet_button.85cf65311617c356fe9237c3e6c10afb.en.html#dnt=false&amp;id=twitter-widget-1&amp;lang=en&amp;original_referer=https%3A%2F%2Fp.w3layouts.com%2Fdemos%2Faug-2016%2F24-08-2016%2Fone_movies%2Fweb%2Fsingle.html&amp;screen_name=w3layouts&amp;size=m&amp;time=1502102422608&amp;type=mention" style="position: static; visibility: visible; width: 136px; height: 20px;" data-screen-name="w3layouts"></iframe><script async="" src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
								</li>
								<li>
									<!-- Place this tag where you want the +1 button to render. -->
									<div id="___plusone_0" style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 32px; height: 20px;"><iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 32px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 20px;" tabindex="0" vspace="0" width="100%" id="I1_1502102853328" name="I1_1502102853328" src="https://apis.google.com/se/0/_/+1/fastbutton?usegapi=1&amp;size=medium&amp;origin=https%3A%2F%2Fp.w3layouts.com&amp;url=https%3A%2F%2Fp.w3layouts.com%2Fdemos%2Faug-2016%2F24-08-2016%2Fone_movies%2Fweb%2Fsingle.html&amp;gsrc=3p&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en.xh47SggJVmI.O%2Fm%3D__features__%2Fam%3DAQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCNnAKKXzFeIiJTiMA4Bq29frxjzuA#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conload&amp;id=I1_1502102853328&amp;parent=https%3A%2F%2Fp.w3layouts.com&amp;pfname=&amp;rpctoken=33261381" data-gapiattached="true" title="G+"></iframe></div>

									<!-- Place this tag after the last +1 button tag. -->
									<script type="text/javascript">
									  (function() {
										var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
										po.src = 'https://apis.google.com/js/platform.js';
										var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
									  })();
									</script>
								</li>
							</ul>
						</div>
						</div>
					</div>	
<!--					<div class="all-comments">-->
                        <!--comments-->
                        <?= $this->render('/partials/comment', [
                            'article'=>$article,
                            'comments'=>$comments,
                            'commentForm'=>$commentForm
                        ])?>
                        <!--comments-->
<!--					</div>-->
				</div>
				<div class="col-md-5 blog-right">
                    <!--News Letter-->
                    <div class="mt-lg-4 mt-3 address_mail_footer_grids m-bottom-0-5">
                        <div class="title text-center mb-lg-4 mb-md-3 mb-3">
                            <h3 class="h-t">Подписка на новые статьи</h3>
                        </div>
                        <div class="news-about-us">
                            <?= SubscriptionWidget::widget() ?>
                        </div>
                    </div>
                    <!--//News Letter-->
                    <!--Categories-->
                    <?php if(!empty($categories)) : ?>
                        <div class="mt-lg-4 mt-3 address_mail_footer_grids m-bottom-0-5">
                            <div class="title text-center mb-lg-4 mb-md-3 mb-3">
                                <h3 class="h-t">Рубрики</h3>
                            </div>
                            <div class="agile-categories-list text-center">
                                <ul>
                                    <?php foreach ($categories as $category ): ?>
                                        <?php if(!empty($category->id)) : ?>
                                            <li class="py-2">
                                                <a href="<?= Url::toRoute(['site/category','id'=>$category->id]);?>"><?= $category->title ?></a>
                                                <span class="post-count pull-right"> (<?= $category->getArticlesCount();?>)</span>
                                            </li>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    <?php endif; ?>
                    <!--//Categories-->
                    <!--Tags-->
                    <?php if(! empty($tags)) : ?>
                        <div class="mt-lg-4 mt-3 address_mail_footer_grids m-bottom-0-5">
                            <div class="title text-center mb-lg-4 mb-md-3 mb-3">
                                <h3 class="h-t">Для этой статьи метки</h3>
                            </div>
                            <div class="tages-w3layouts-list text-center">
                                <ul >
                                    <?php foreach ($tags as $tag ): ?>
                                        <?php if(!empty($tag['id'])) : ?>
                                            <li class="py-2">
                                                <a href="<?= Url::toRoute(['site/tag','id'=>$tag['id']]);?>"><?= $tag['title']; ?></a>
                                            </li>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    <?php endif; ?>
                    <!--//Tags-->
                    <!--Популярные посты-->
                    <?php if(! empty($popular)) : ?>
                        <div class="mt-lg-4 mt-3 address_mail_footer_grids m-bottom-0-5">
                        <div class="title text-center mb-lg-4 mb-md-3 mb-3">
                            <h3 class="h-t">Популярные посты</h3>
                        </div>
                        <div class="dance-agile-info  articles-text-center">
                            <ul>
                                <?php foreach ($popular as $article): ?>
                                    <li>
                                        <div class="footer-grid row  mb-3">
                                            <?php if($article->image) : ?>
                                                <div class="col-lg-4 col-md-6 col-sm-6 col-5 text-right">
                                                    <a href="<?= Url::toRoute(['site/view','id'=>$article->id]);?>">
                                                        <img src="<?= $article->getImage();?>" class="img-responsive" alt="" style="width: 100%"  >
                                                    </a>
                                                </div>
                                                <div class="col-lg-8 col-md-6 col-sm-6 col-7 bottom-para px-0">
                                                    <h6><a href="<?= Url::toRoute(['site/view','id'=>$article->id]);?>" class="scroll"><?= $article->title; ?></a></h6>
                                                    <div class="news-date-list pt-2">
                                                        <ul>
                                                            <li><a href="<?= Url::toRoute(['site/view','id'=>$article->id]);?>" class="clr-two"><?= $article->getPublishDate(); ?></a></li>
                                                            <li><a href="<?= Url::toRoute(['site/view','id'=>$article->id]);?>" class="clr-two"><?= $article->getCountTags(); ?> Tags</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            <?php else: ?>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12 bottom-para">
                                                    <h6><a href="<?= Url::toRoute(['site/view','id'=>$article->id]);?>" class="scroll"><?= $article->title; ?></a></h6>
                                                    <div class="news-date-list pt-2">
                                                        <ul>
                                                            <li><a href="<?= Url::toRoute(['site/view','id'=>$article->id]);?>" class="clr-two"><?= $article->getPublishDate(); ?></a></li>
                                                            <li><a href="<?= Url::toRoute(['site/view','id'=>$article->id]);?>" class="clr-two"><?= $article->getCountTags(); ?> Tags</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <?php endif; ?>
                    <!--//Популярные посты-->
			    </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	    </div>
	</div>
		<!-- //blog-->