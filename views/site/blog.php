<?php
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\widgets\LinkPager;

/* @var $modelLoginForm app\models\LoginForm */
/* @var $modelSignupForm app\models\SignupForm */
/* @var $modelPasswordResetRequestForm app\models\forms\PasswordResetRequestForm */
?>
    <!-- banner -->
    <div class="w3ls-banner text-center">
        <div class="container">
            <h2 class="wthree-title">time to go digital</h2>
            <h3 class="wthree-subtitle">making a better world</h3>
        </div>
    </div>
    <!-- //banner -->
    <!-- breadcrumbs -->
    <div class="w3layouts-breadcrumbs text-center">
        <div class="container">
            <span class="agile-breadcrumbs"><a href="<?= Url::home()?>">Главная</a> > <span>Новости</span></span>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <div class="container">
	<!-- blog -->
        <div class="w3ls-section blog-agile-main">
            <h4 class="w3ls-inner-title">наш блог</h4>
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
//                          'lastPageLabel' => 'Последняя',
//                          'firstPageLabel' => 'Первая',
//                                'nextPageLabel' => 'Следущая',
//                                'prevPageLabel' => 'Предыдущая',
//                                'hideOnSinglePage' => true,
//                                'linkOptions' => [
//                                    'class' => 'page-link',
//                                ],
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
                            'maxButtonCount' => 3,

                            // Css for each options. Links
                            'linkOptions' => ['class' => ''],
//                                'disabledPageCssClass' => 'disabled',

                            // Customzing CSS class for navigating link
                            'prevPageCssClass' => 'p-back',
                            'nextPageCssClass' => 'p-next',
                            'firstPageCssClass' => 'frist',
                            'lastPageCssClass' => 'last',

                        ]);?>
                    </nav>
<!--                            <ul>-->
<!--                                <li><a class="frist" href="#">Prev</a></li>-->
<!--                                <li><a class="last" href="#">Next</a></li>-->
<!--                            </ul>-->
                    <div class="clearfix"> </div>
                </div>
                <!--//end-blog-pagenate-->
            </div>
            <div class="col-md-5 blog-right">
<!--                <h4 class="widget-title">My Cityline app</h4>-->
<!--                <h5 class="h-t">Manage all your accounts anytime. anywhere.</h5>-->
<!--                <ul class="app-w3ls">-->
<!--                    <li><a href="#"><img src="public/images/1.png" alt=""></a></li>-->
<!--                    <li><a href="#"><img src="public/images/2.png" alt=""></a></li>-->
<!--                </ul>-->
<!--                <div class="clearfix"></div>-->
                <div class="w3ls-section widget-side">
                    <?php if(!empty($categories)) : ?>
                    <h4 class="widget-title">Рубрики</h4>
                    <ul>
                        <?php foreach ($categories as $category ): ?>
                            <?php if(!empty($category->id)) : ?>
                                <li class="py-2">
                                    <a href="<?= Url::toRoute(['site/category','id'=>$category->id]);?>"><?= $category->title ?></a>
                                    <span class="post-count pull-right"> (<?= $category->getArticlesCount();?>)</span>
                                    <span class="post-date">Feb 13, 2017</span>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                 <?php endif; ?>
                </div>
                <div class="w3ls-section widget-side">
                    <?php if(!empty($tags)) : ?>
                        <h4 class="widget-title">Метки</h4>
                        <ul>
                            <?php foreach ($tags as $tag ): ?>
                                <?php if(!empty($tag->id)) : ?>
                                    <li class="py-2">
                                        <a href="<?= Url::toRoute(['site/tag','id'=>$tag['id']]);?>"><?= $tag['title']; ?></a>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
                <div class="w3ls-section widget-side">
                    <?php if(!empty($popular)) : ?>
                        <h4 class="widget-title">Популярные статьи</h4>
                        <ul>
                            <?php foreach ($popular as $article ): ?>
                                <?php if(!empty($article->id)) : ?>
                                    <li class="py-2">
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
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
                <div class="w3ls-section widget-side">
                    <h4 class="widget-title">Свяжитесь с нами</h4>
                    <?php $form = ActiveForm::begin([
                        'action'=>['site/contact-us'],
                        'options'=>['class'=>'pt-lg-2',
                            'role'=>'form'
                        ]])
                    ?>
                    <div class=" contact-wls-detail">
                        <div class="agile-wls-contact-mid">
                            <div class="form-group contact-forms">
                                <?= $form->field($contactUsForm, 'name')->textInput(['class'=>'form-control','placeholder'=>'Имя'])->label(false) ?>
                            </div>
                            <div class="form-group contact-forms">
                                <?= $form->field($contactUsForm, 'email')->textInput(['class'=>'form-control','placeholder'=>'Email'])->label(false) ?>
                            </div>
                        </div>
                        <div class="countact-text">
                            <div class="form-group contact-forms">
                                <?= $form->field($contactUsForm, 'body')->textarea(['class'=>'form-control','placeholder'=>'Комментарий'])->label(false)?>
                            </div>
                            <button type="submit" class="btn sent-butnn">Отправить</button>
                        </div>
                    </div>
                    <?php ActiveForm::end();?>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!-- //blog-->
	</div>

<?= $this->render('@app/views/auth/login', [
    'modelLoginForm' => $modelLoginForm,
])?>

<?= $this->render('@app/views/auth/signup', [
    'modelSignupForm' => $modelSignupForm,
])?>

<?= $this->render('@app/views/auth/request-password-reset-token', [
    'modelPasswordResetRequestForm' => $modelPasswordResetRequestForm
])?>