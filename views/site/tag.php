<?php

use app\common\widgets\SubscriptionWidget;
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>
<div class="inner_page-banner one-img">

</div>
<!--blog -->
<section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
    <div class="container-fluid py-lg-5 py-md-4 py-sm-4 py-3">
        <div class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
            <h3><?= $tag->title ?></h3>
        </div>
        <div class="row">
            <div class="col-lg-8">
                    <div class="row blog-text mt-0 info-grids-blog">
                        <?php if(! empty($articles)) : ?>
                            <?php foreach ($articles as $article): ?>
                                <div class="col-lg-6 col-md-6 blog-grid-w3layouts-img">
                                <?php if(! empty($article->image)) : ?>
                                    <div class="blog-two-img">
                                        <a href="<?= Url::toRoute(['site/view','id'=>$article->id]);?>">
                                            <img src="<?= $article->getImage(); ?>" class="img-fluid" alt="" style="width: 100%">
                                        </a>
                                    </div>
                                <?php endif; ?>
                                <div class="blog-agile-text text-center p-lg-4 p-3">
                                    <h4><?= $article->title ?></h4>
                                    <h5 class="pt-3"><?= $article->description ?></h5>
                                    <div class="pt-4"><?=  $article->content ?></div>
                                    <div class="news-date-list text-center mt-2">
                                        <ul>
                                            <li>
                                             от   <a href="<?= Url::toRoute(['site/view','id'=>$article->id]);?>" class="text-muted"><?= $article->getPublishDate(); ?>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=<?= Url::toRoute(['site/view','id'=>$article->id]);?>" class="text-muted" ><?= $article->getCountTags(); ?> меток
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="blog-bloged">
                                        <div class="outs_more-buttn">
                                            <a href="<?= Url::toRoute(['site/view','id'=>$article->id]);?>">Далее ...</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                <!-- pagination-blog-->
                <div class="pagination-blog">
                    <nav aria-label="Page navigation example">
                        <?php echo LinkPager::widget([
                            'pagination' => $pagination,
//                          'lastPageLabel' => 'Последняя',
//                          'firstPageLabel' => 'Первая',
//                            'nextPageLabel' => 'Следущая',
//                            'prevPageLabel' => 'Предыдущая',
//                            'hideOnSinglePage' => true,
//                            'linkOptions' => [
//                                    'class' => 'page-link',
//                            ],
                            //Css option for container
                            'options' => ['class' => ''],
                            //First option value
                            'firstPageLabel' => '&nbsp;',
                            //Last option value
                            'lastPageLabel' => '&nbsp;',
                            //Previous option value
                            'prevPageLabel' => '<',
                            //Next option value
                            'nextPageLabel' => '>',
                            //Current Active option value
                            'activePageCssClass' => 'p-active',
                            //Max count of allowed options
                            'maxButtonCount' => 5,

                            // Css for each options. Links
                            'linkOptions' => ['class' => ''],
//                                'disabledPageCssClass' => 'disabled',

                            // Customzing CSS class for navigating link
                            'prevPageCssClass' => 'p-back',
                            'nextPageCssClass' => 'p-next',
                            'firstPageCssClass' => 'p-first',
                            'lastPageCssClass' => 'p-last',
                        ]);?>
                    </nav>
                </div>
                <!-- //pagination-blog-->
            </div>
            <!--//Blog-inner-->
            <div class="col-lg-4">
                <!--News Letter-->
                <div class="address_mail_footer_grids">
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
                                <li class="py-2">
                                    <a href="<?= Url::toRoute(['site/category','id'=>$category->id]);?>"><?= $category->title ?></a>
                                    <span class="post-count pull-right"> (<?= $category->getArticlesCount();?>)</span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <!--//Categories-->
                <!--Популярные посты-->
                <?php if(! empty($popular)) : ?>
                <div class="mt-lg-4 mt-3 address_mail_footer_grids">
                    <div class="title text-center mb-lg-4 mb-md-3 mb-3">
                        <h3>Популярные статьи</h3>
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
                                                        <li><a href="<?= Url::toRoute(['site/view','id'=>$article->id]);?>" class="clr-two"><?= $article->getCountTags(); ?> меток</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        <?php else: ?>
                                            <div class=" text-center col-lg-12 col-md-12 col-sm-12 col-12 bottom-para">
                                                <h6><a href="<?= Url::toRoute(['site/view','id'=>$article->id]);?>" class="text-center scroll"><?= $article->title; ?></a></h6>
                                                <div class=" text-center news-date-list pt-2">
                                                    <ul>
                                                        <li><a href="<?= Url::toRoute(['site/view','id'=>$article->id]);?>" class="clr-two"><?= $article->getPublishDate(); ?></a></li>
                                                        <li><a href="<?= Url::toRoute(['site/view','id'=>$article->id]);?>" class="clr-two"><?= $article->getCountTags(); ?> меток</a></li>
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
                <!--Tags-->
                <div class="mt-lg-4 mt-3 address_mail_footer_grids">
                    <div class="title text-center mb-lg-4 mb-md-3 mb-3">
                        <h3>Все метки</h3>
                    </div>
                    <div class="tages-w3layouts-list text-center">
                        <ul >
                            <?php foreach ($tags as $tag ): ?>
                                <li class="py-2">
                                    <a href="<?= Url::toRoute(['site/tag','id'=>$tag['id']]);?>"><?= $tag['title']; ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <!--//Tags-->
            </div>
        </div>
    </div>
</section>
      