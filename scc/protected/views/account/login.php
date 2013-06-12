<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle = Yii::app()->name . ' - Login';
?>

<div class="form">
    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'login-form',
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
    ));
    ?>
    <?php echo $form->textFieldRow($model, 'username'); ?>
    <?php echo $form->passwordFieldRow($model, 'password'); ?>
    <div class="form-actions">
        <?php print CHtml::htmlButton('<i class="icon-lock"></i> Login', array('class' => 'btn btn-primary', 'type' => 'submit'));
        ?>
    </div>

    <?php $this->endWidget(); ?>
</div><!-- form -->
