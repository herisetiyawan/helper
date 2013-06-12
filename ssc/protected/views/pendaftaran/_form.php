<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'pelajar-form',
    'type' => 'horizontal',
    'enableAjaxValidation' => TRUE,
        ));
?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>
<?php echo $form->textFieldRow($model, 'nama', array('class' => 'span5', 'maxlength' => 160)); ?>

<?php echo $form->textFieldRow($model, 'tempat', array('class' => 'span5', 'maxlength' => 100)); ?>

<?php echo $form->datepickerRow($model, 'tanggal_lahir',
        array('prepend'=>'<i class="icon-calendar"></i>')); ?>

<?php echo $form->textFieldRow($model, 'email', array('class' => 'span5', 'maxlength' => 220)); ?>

<?php echo $form->radioButtonListRow($model, 'jenis_kelamin', array('L' => 'Laki-Laki', 'P' => 'Perempuan',)); ?>

<?php echo $form->textAreaRow($model, 'alamat', array('rows' => 6, 'cols' => 50, 'class' => 'span8')); ?>

<?php
    echo $form->dropDownListRow($model, 'agama', array(
        'Islam' => 'Islam',
        'Katholik' => 'Katholik',
        'Protestan' => 'Protestan',
        'Hindu' => 'Hindu',
        'Budha' => 'Budha',
        'Konghuchu' => 'Konghuchu')
            , array('empty' => '--Agama--'));
    ?>

<?php
echo $form->dropDownListRow($model, 'sekolah', array('SD' => 'SD', 'SMP' => 'SMP', 'SMA' => 'SMA'), array(
    'ajax' => array(
        'type' => 'POST', //request type
        'url' => CController::createUrl('/pendaftaran/kelas'), //url to call.
//Style: CController::createUrl('currentController/methodToCall')
        'update' => '#Pelajar_kelas', //selector to update
//'data'=>'js:javascript statement' 
//leave out the data key to pass all form values through
    ),
    'empty' => '- Sekolah -'));
?>


<?php echo $form->dropDownListRow($model, 'kelas', array('1' => '1 (satu)', '2' => '2 (dua)', '3' => '3 (tiga)'), array('empty' => '-Kelas-')); ?>

<?php echo $form->textAreaRow($model, 'alamat_sekolah', array('rows' => 6, 'cols' => 50, 'class' => 'span8')); ?>

<?php echo $form->dropDownListRow($model, 'program', Chtml::listData(ProgStudi::model()->getAllProgStudi(), 'id_prog_stud', 'nama'), array('empty' => '-Program Studi-')); ?>

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
