<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div id="menu">
    <ul class="menu">
        <li><a href="<?php print Yii::app()->createUrl('/vip'); ?>"><i class="icon-home" style="display: inline-block;"></i> <span style="display: inline-block;">Dashboard</span></a></li>
        <li><a href="#" class="parent"><i class="icon-tasks" style="display: inline-block;"></i> <span style="display: inline-block;">Administrasi</span></a>
            <ul>
                <li><a href="<?php print Yii::app()->createUrl('/admin/admin'); ?>"><span>Admin</span></a></li>
                <li><a href="<?php print Yii::app()->createUrl('/progStudi/admin'); ?>"><span>Program Studi</span></a></li>
                <li><a href="<?php print Yii::app()->createUrl('/information/admin'); ?>"><span>Information</span></a></li>
                <li><a href="<?php print Yii::app()->createUrl('/typeInfo/admin'); ?>"><span>Type Info</span></a></li>
            </ul>
        </li>
        <li><a href="<?php print Yii::app()->createUrl('/pelajar/admin'); ?>"><i class="icon-user" style="display: inline-block;"></i> <span style="display: inline-block;">Pelajar</span></a></li>
        <li><a href="<?php print Yii::app()->createUrl('/ssc/logout',  array('admin'=>'')); ?>"><i class="icon-off" style="display: inline-block;"></i> <span style="display: inline-block;">Logout</span></a></li>
    </ul>
</div>
<?php if (isset($this->breadcrumbs)): ?>
    <?php
    $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
        'homeLink' => CHtml::link('Dashboard', $this->createUrl('/vip')),
        'links' => $this->breadcrumbs,
    ));
    ?><!-- breadcrumbs -->
<?php endif ?>

