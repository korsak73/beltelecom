<?php

use phpnt\bootstrapNotify\BootstrapNotify;

/* @var $this yii\web\View */
/* @var $content string */
?>
<div class="content-wrapper">
    <?= BootstrapNotify::widget() ?>
    <div style="margin-left: 1em;">
        <section class="content" >
          <div class="row">
               <?= $content ?>
           </div>
        </section>
    </div>
</div>

<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 2.0
    </div>
    <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
</footer>

<div class='control-sidebar-bg'></div>