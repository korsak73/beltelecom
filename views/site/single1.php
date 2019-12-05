<?php
use app\assets\AppAsset;
use app\common\widgets\SubscriptionWidget;
use yii\helpers\Url;

//AppAsset::register($this);
?>
<div class="inner_page-banner one-img"></div>
<section class="py-md-3 py-sm-3 py-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
                    <h3><?=  $article->title ?></h3>
                </div>
                <!--blog-->
                <!-- Blog-four -->
                <div class="blog-text">
                    <?php if($article->image) : ?>
                        <div class="blog-two-img">
                            <img src="<?= $article->getImage(); ?>" class="img-fluid" alt="">
                        </div>
                    <?php endif; ?>
                    <div class="blog-agile-text-middle blog-agile-bottom">
                        <?php if(! empty($article->category)) : ?>
                            <a href="<?= Url::toRoute(['site/category','id'=>$article->category->id]);?>" class="text-muted" >
                                <h4 class="pt-3"><?= $article->category->title ?></h4>
                            </a>
                        <?php endif; ?>
                        <?php if(! empty($article->content)) : ?>
                            <div class="pt-4">
                                <?=  $article->content ?>
                            </div>
                        <?php endif; ?>
                        <div class="news-date-list text-sm-right">
                            <ul>
                                <li>
                                    <a href="<?= Url::toRoute(['site/view','id'=>$article->id]);?>" class="text-muted">
                                         <?= empty($article->nameAutor) ? null : $article->nameAutor ?> От  <?= $article->getPublishDate(); ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= Url::toRoute(['site/view','id'=>$article->id]);?>" class="text-muted" ><?= $article->getCountTags(); ?> тэгов
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="row blog-img-center">
                            <div class="col-lg-6 col-md-6 col-sm-6 outs_more-buttn">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 icons text-sm-right mt-3">
                                <div class="icons">
                                    <ul>
                                        <li><a href="http://facebook.com/"><span class="fab fa-facebook-f"></span></a></li>
                                        <li><a href="http://linkedin.com/"><span class="fab fa-linkedin"></span></a></li>
                                        <li><a href="http://twitter.com/"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="http://plus.google.com/"><span class="fab fa-google-plus"></span> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                    <!--comments-->
                    <?= $this->render('/partials/comment', [
                        'article'=>$article,
                        'comments'=>$comments,
                        'commentForm'=>$commentForm
                    ])?>
                    <!--comments-->
            </div>
            <div class="col-lg-4">
            <!--News Letter-->
                <div class="mt-lg-4 mt-3 address_mail_footer_grids">
                    <div class="title text-center mb-lg-4 mb-md-3 mb-3">
                        <h3>Подписка на новые статьи</h3>
                    </div>
                    <div class="news-about-us">
                        <?= SubscriptionWidget::widget() ?>
                    </div>
                </div>
                <!--//News Letter-->
                <!--Categories-->
                <div class="mt-lg-4 mt-3 address_mail_footer_grids">
                        <div class="title text-center mb-lg-4 mb-md-3 mb-3">
                            <h3>Рубрики</h3>
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
                <!--//Categories-->
                <!--Tags-->
                <?php if(! empty($tags)) : ?>
                    <div class="mt-lg-4 mt-3 address_mail_footer_grids">
                    <div class="title text-center mb-lg-4 mb-md-3 mb-3">
                        <h3>Для этой статьи метки</h3>
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
                <div class="mt-lg-4 mt-3 address_mail_footer_grids">
                    <div class="title text-center mb-lg-4 mb-md-3 mb-3">
                        <h3>Популярные посты</h3>
                    </div>
                    <div class="dance-agile-info  articles-text-center">
                        <ul>
                            <?php foreach ($popular as $article): ?>
                                <li>
                                    <div class="footer-grid row  mb-3">
                                        <?php if($article->image) : ?>
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-5 text-right">
                                                    <a href="<?= Url::toRoute(['site/view','id'=>$article->id]);?>">
                                                        <img class="img-fluid" src="<?= $article->getImage();?>" alt="" >
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
                <!--//Популярные посты-->
                <!--Последние посты-->
                <div class="mt-lg-4 mt-3 address_mail_footer_grids">
                    <div class="title text-center mb-lg-4 mb-md-3 mb-3">
                        <h3>Последние посты</h3>
                    </div>
                    <div class="dance-agile-info  articles-text-center">
                        <ul>
                            <?php foreach ($recent as $article): ?>
                                <li>
                                    <div class="footer-grid row  mb-3">
                                        <?php if($article->image) : ?>
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-5 text-right">
                                                 <a href="<?= Url::toRoute(['site/view','id'=>$article->id]);?>">
                                                     <img class="img-fluid" src="<?= $article->getImage();?>" alt="" >
                                                 </a>
                                            </div>
                                            <div class="col-lg-8 col-md-6 col-sm-6 col-7 bottom-para px-0">
                                                <h6><a href="<?= Url::toRoute(['site/view','id'=>$article->id]);?>" class="scroll"><?= $article->title; ?></a></h6>
                                                <div class="news-date-list pt-2">
                                                    <ul>
                                                        <li><a href="<?= Url::toRoute(['site/view','id'=>$article->id]);?>" class="clr-two"><?= $article->getPublishDate(); ?></a></li>
                                                        <li><a href="<?= Url::toRoute(['site/view','id'=>$article->id]);?>" class="clr-two"><?= $article->getTags()->select('id')->asArray()->count(); ?> Tags</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        <?php else: ?>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 bottom-para">
                                                <h6><a href="<?= Url::toRoute(['site/view','id'=>$article->id]);?>" class="scroll"><?= $article->title; ?></a></h6>
                                                <div class="news-date-list pt-2">
                                                    <ul>
                                                        <li><a href="<?= Url::toRoute(['site/view','id'=>$article->id]);?>" class="clr-two"><?= $article->getPublishDate(); ?></a></li>
                                                        <li><a href="<?= Url::toRoute(['site/view','id'=>$article->id]);?>" class="clr-two"><?= $article->getTags()->select('id')->asArray()->count(); ?> Tags</a></li>
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
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</section>
   