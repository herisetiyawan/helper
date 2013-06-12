<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'admin-form',
    'type' => 'horizontal',
    'enableAjaxValidation' => false,
        ));
?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

<?php echo $form->textFieldRow($model, 'username', array('class' => 'span5', 'maxlength' => 160)); ?>
<?php if ($model->isNewRecord || isset($_GET['chpass'])) { ?>
    <?php echo $form->passwordFieldRow($model, 'password', array('class' => 'span5', 'maxlength' => 300)); ?>
<?php } ?>
<?php echo $form->textFieldRow($model, 'fullname', array('class' => 'span5', 'maxlength' => 160)); ?>

<?php echo $form->textFieldRow($model, 'email', array('class' => 'span5', 'maxlength' => 200)); ?>

<?php echo $form->textFieldRow($model, 'no_phone', array('class' => 'span5', 'maxlength' => 25)); ?>

<?php echo $form->dropDownListRow($model, 'access_status', array('admin'=>'Administrator','manager'=>'Manager'),array('class' => 'span3')); ?>

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
