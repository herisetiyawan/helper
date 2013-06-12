<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'pelajar-form',
    'type' => 'horizontal',
    'enableAjaxValidation' => false,
        ));
?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

<?php echo $form->textFieldRow($model, 'nip', array('class' => 'span5', 'maxlength' => 20)); ?>

<?php echo $form->textFieldRow($model, 'nama', array('class' => 'span5', 'maxlength' => 160)); ?>

<?php echo $form->textFieldRow($model, 'tempat', array('class' => 'span5', 'maxlength' => 100)); ?>

<?php echo $form->textFieldRow($model, 'tanggal_lahir', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'email', array('class' => 'span5', 'maxlength' => 220)); ?>

<?php echo $form->textFieldRow($model, 'jenis_kelamin', array('class' => 'span5', 'maxlength' => 1)); ?>

<?php echo $form->textAreaRow($model, 'alamat', array('rows' => 6, 'cols' => 50, 'class' => 'span8')); ?>

<?php echo $form->textFieldRow($model, 'agama', array('class' => 'span5', 'maxlength' => 60)); ?>

<?php echo $form->textFieldRow($model, 'sekolah', array('class' => 'span5', 'maxlength' => 10)); ?>

<?php echo $form->textFieldRow($model, 'kelas', array('class' => 'span5')); ?>

<?php echo $form->textAreaRow($model, 'alamat_sekolah', array('rows' => 6, 'cols' => 50, 'class' => 'span8')); ?>

<?php echo $form->textFieldRow($model, 'program', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'no_formulir', array('class' => 'span5', 'maxlength' => 20)); ?>

<?php echo $form->textFieldRow($model, 'date_created', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'is_active', array('class' => 'span5')); ?>

    <?php echo $form->textFieldRow($model, 'confirmasi_status', array('class' => 'span5')); ?>

<div class="form-actions">
    <?php
    $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType' => 'submit',
        'type' => 'primary',
        'label' => $model->isNewRecord ? 'Create' : 'Save',
    ));
    ?>
</div>

<?php $this->endWidget(); ?>
