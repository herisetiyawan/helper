<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<br><br><br>
<div align="center">
<?php $this->widget('bootstrap.widgets.TbBox', array(
    'title' => 'Private Access',
    'headerIcon' => 'icon-home',
    'content' => $this->renderPartial('login',  array(
        'model'=>$model,
    ),true),
    'htmlOptions'=>array(
        'style'=>'width: 261px;',
        'align'=>'left',
    ),
)); ?>
</div>
