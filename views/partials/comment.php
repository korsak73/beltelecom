<div class="comments-w3layouts-grid pt-lg-5 pt-md-4 pt-3" style="margin-top: 1em;">
    <?php use yii\helpers\Url;

    if(!empty($comments)):?>

                <div class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
                    <h3>Комментарии</h3>
                </div>
        <?php foreach($comments as $comment):?>
            <div class="all-comments">
                <div class="media-grids">
                    <div class="media">
                        <h5><?= empty($comment->userName) ? null : $comment->getUser()->getName();?></h5>
                        <div class="media-left">
                            <a href="#">
                                <img class="img-fluid avatar-default" src="<?= ! empty($comment->user->avatar) ? $comment->user->getImage() : 'public/images/avatar-default.png'; ?>" title="One movies" alt=" ">
                            </a>
                        </div>
                        <div class="media-body">
                            <p><?= $comment->text; ?></p>
                            <span>Подробнее ..<a href="<?= Url::toRoute(['site/view','id'=>$comment->article_id]);?>"> <?= $comment->article->nameAuthor ?> </a></span>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach;?>
    <?php endif;?>
</div>
            <!--//comments-->
            <!--comments-form-->
<div class="pt-lg-4 pt-md-3 pt-3 form-comment" style="margin-top: 2em;">
    <?php if(! Yii::$app->user->isGuest):?>
            <div class="my-3 leave-comment text-left">
                <h4>Комментарии</h4>
            </div>
            <?php if(Yii::$app->session->getFlash('comment')):?>
                <div class="alert alert-success alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                    <h4><i class="icon fa fa-check"></i><?= Yii::$app->session->getFlash('comment'); ?></h4>
                </div>
            <?php endif;?>
            <?php $form = \yii\widgets\ActiveForm::begin([
                'action'=>['site/comment', 'id'=>$article->id],
                'options'=>['class'=>'pt-lg-2', 'role'=>'form']])?>
    <!--                <form class="pt-lg-2" action="#" method="post">-->
                <div class="row agile-wls-contact-mid">
                    <div class="col-lg-6 col-md-6 form-group contact-forms">
                        <?= $form->field($commentForm, 'name')->textInput(['class'=>'form-control','placeholder'=>'Имя'])->label(false) ?>
    <!--                            <input type="text" class="form-control" placeholder="Name">-->
                    </div>
                    <div class="col-lg-6 col-md-6 form-group contact-forms">
                        <?= $form->field($commentForm, 'email')->textInput(['class'=>'form-control','placeholder'=>'Email'])->label(false) ?>
    <!--                            <input type="email" class="form-control" placeholder="Email">-->
                    </div>
                </div>
                <div class="form-group contact-forms">
                    <?= $form->field($commentForm, 'comment')->textarea(['class'=>'form-control','placeholder'=>'Комментарий'])->label(false)?>
    <!--                        <textarea class="form-control" rows="3"></textarea>-->
                </div>
                <button type="submit" class="btn sent-butnn">Отправить</button>
                <?php \yii\widgets\ActiveForm::end();?>
    <!--                </form>-->
           <!--//comments-form-->
    <?php endif;?>
</div>
<!-- end bottom comment-->

<?php if(Yii::$app->user->isGuest): ?>
    <?php
    $js = <<< JS
    $('.form-comment').attr('hidden', true);
JS;
    $this->registerJs($js);?>
<?php endif;?>
