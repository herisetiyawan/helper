<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="container" style="position: relative;">
    <?php include_once 'nav-menu.php'; ?>
    <?php $logo = Chtml::image(Yii::app()->request->baseUrl . '/images/ssc.png', 'ssc', array('style' => 'width: 144px;')); ?>
    <?php print Chtml::link($logo,Yii::app()->request->baseUrl); ?>
</div>
<div class="clearfix"></div>

