<?php

use yii\helpers\Html;

?>
<!-- banner -->
<div class="banner_w3lspvt position-relative">
    <div class="container">
        <div class="d-md-flex">
            <div class="banner-img">
                <img src="/public/images/banner.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>
    <!-- animations effects -->
<!--    <div class="icon-effects-w3l">-->
<!--        <img src="/public/images/shape1.png" alt="" class="img-fluid shape-wthree shape-w3-one">-->
<!--        <img src="/public/images/shape2.png" alt="" class="img-fluid shape-wthree shape-w3-two">-->
<!--        <img src="/public/images/shape3.png" alt="" class="img-fluid shape-wthree shape-w3-three">-->
<!--        <img src="/public/images/shape5.png" alt="" class="img-fluid shape-wthree shape-w3-four">-->
<!--        <img src="/public/images/shape4.png" alt="" class="img-fluid shape-wthree shape-w3-five">-->
<!--        <img src="/public/images/shape6.png" alt="" class="img-fluid shape-wthree shape-w3-six">-->
<!--    </div>-->
    <!-- //animations effects -->
    <div class="row" style="margin: 30px 0px 10px 0px;">
        <div class="col-md-3 center">&nbsp;
            <?= Html::a('Загрузить аватар', ['set-image'], ['class' => 'btn btn-info']) ?>
        </div>
    </div>
</div>
<!-- //banner -->