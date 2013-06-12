<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_information')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_information),array('view','id'=>$data->id_information)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_type_info')); ?>:</b>
	<?php echo CHtml::encode($data->id_type_info); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image')); ?>:</b>
	<?php echo CHtml::encode($data->image); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
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

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('user_modified')); ?>:</b>
	<?php echo CHtml::encode($data->user_modified); ?>
	<br />

	*/ ?>

</div>