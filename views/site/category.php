<?php

use app\common\widgets\SubscriptionWidget;
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>
<!--<div class="inner_page-banner one-img">-->
<!---->
<!--</div>-->

<!-- banner -->
<div class="w3layouts-banner-top3 text-center">
    <div class="container">
        <h2 class="wthree-title"></h2>
        <h3 class="wthree-subtitle"></h3>
    </div>
</div>
<!-- //banner -->
<!-- breadcrumbs -->
<div class="w3layouts-breadcrumbs text-center">
    <div class="container">
        <span class="agile-breadcrumbs"><a href="<?= Url::home()?>">Главная</a> > <span>Тема :  <?= $category->title ?></span></span>
    </div>
</div>
<div class="container">
    <!-- blog -->
    <div class="w3ls-section blog-agile-main">
        <h4 class="w3ls-inner-title"><?= $category->title ?></h4>
        <div class="col-md-7  blog-left">
            <?php foreach ($articles as $article): ?>
                <div class="post-media">
                    <?php if(isset($article->image)) : ?>
                        <a href="<?= Url::toRoute(['site/view','id'=>$article->id]);?>">
                            <img src="<?= $article->getImage(); ?>" class="img-responsive" alt="" style="width: 100%">
                        </a>
                        <!--                            <a href="single.html"><img src="public/images/contact2.jpg" class="img-responsive" alt=""></a>-->
                    <?php endif; ?>
                    <div class="blog-text">
                        <a href="<?= Url::toRoute(['site/view','id'=>$article->id]);?>">
                            <h3 class="h-t"><?= $article->title ?></h3>
                        </a>
                        <div class="entry-meta">
                            <h6 class="blg"><i class="fa fa-clock-o"></i><?= $article->getPublishDate(); ?></h6>
                            <div class="icons">
                                <a href="<?= Url::toRoute(['site/view','id'=>$article->id]);?>"><i class="fa fa-user"></i> <?= $article->nameAuthor ?></a>
                                <a href="<?= Url::toRoute(['site/view','id'=>$article->id]);?>"><i class="fa fa-comments-o"></i> <?= $article->getCountTags(); ?> Тэгов</a>
                                <a href="<?= Url::toRoute(['site/view','id'=>$article->id]);?>"><i class="fa fa-thumbs-o-up"></i> <?= $article->viewed ?> просмотров</a>
                                <a href="#"><i class="fa fa-thumbs-o-down"></i>  26</a>
                            </div>
                            <div class="clearfix"></div>
                            <p><?= $article->description ?></p>
                            <a href="<?= Url::toRoute(['site/view','id'=>$article->id]);?>">Читать далее</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <!--start-blog-pagenate-->
            <div class="blog-pagenat">
                <nav aria-label="Page navigation example">
                    <?php echo LinkPager::widget([
                        'pagination' => $pagination,
                        //Css option for container
                        'options' => ['class' => ''],
                        //Current Active option value
                        'activePageCssClass' => 'p-active',
                        //Max count of allowed options
                        'maxButtonCount' => 3,
                        // Css for each options. Links
                        'linkOptions' => ['class' => ''],
                        // Customzing CSS class for navigating link
                        'prevPageCssClass' => 'p-back',
                        'nextPageCssClass' => 'p-next',
                        'firstPageCssClass' => 'frist',
                        'lastPageCssClass' => 'last',
                    ]);?>
                </nav>
                <div class="clearfix"> </div>
            </div>
            <!--//end-blog-pagenate-->
        </div>
        <div class="col-md-5 blog-right">
            <!--News Letter-->
            <div class="address_mail_footer_grids m-bottom-0-5">
                <div class="title text-center mb-lg-4 mb-md-3 mb-3">
                    <h3>Подписка на новые статьи</h3>
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
            <?php if(!empty($tags)) : ?>
                <div class="mt-lg-4 mt-3 address_mail_footer_grids m-bottom-0-5">
                    <div class="title text-center mb-lg-4 mb-md-3 mb-3">
                        <h3 class="h-t">Метки</h3>
                    </div>
                    <div class="tages-w3layouts-list text-center">
                        <ul >
                            <?php foreach ($tags as $tag ): ?>
                                <?php if(!empty($tag->id)) : ?>
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
        </div>
        <div class="clearfix"> </div>
    </div>
    <!-- //blog-->
</div>
