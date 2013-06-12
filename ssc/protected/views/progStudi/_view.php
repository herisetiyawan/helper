<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_prog_stud')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_prog_stud),array('view','id'=>$data->id_prog_stud)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keterangan')); ?>:</b>
	<?php echo CHtml::encode($data->keterangan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_created')); ?>:</b>
	<?php echo CHtml::encode($data->date_created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_created')); ?>:</b>
	<?php echo CHtml::encode($data->user_created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_modified')); ?>:</b>
	<?php echo CHtml::encode($data->date_modified); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_modified')); ?>:</b>
	<?php echo CHtml::encode($data->User_modified); ?>
	<br />


</div>