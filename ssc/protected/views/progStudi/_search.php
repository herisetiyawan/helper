<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldRow($model,'id_prog_stud',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'nama',array('class'=>'span5','maxlength'=>220)); ?>

		<?php echo $form->textFieldRow($model,'keterangan',array('class'=>'span5','maxlength'=>250)); ?>

		<?php echo $form->textFieldRow($model,'date_created',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'user_created',array('class'=>'span5','maxlength'=>250)); ?>

		<?php echo $form->textFieldRow($model,'date_modified',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'user_modified',array('class'=>'span5','maxlength'=>250)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
