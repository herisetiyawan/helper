<?php
$this->breadcrumbs=array(
	'Pelajars'=>array('index'),
	'Manage',
);

$this->menu=array(
array('label'=>'List Pelajar','url'=>array('index')),
array('label'=>'Create Pelajar','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('pelajar-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Manage Pelajars</h1>

<p>
	You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
		&lt;&gt;</b>
	or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
	<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
'id'=>'pelajar-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'id_pelajar',
		'nip',
		'nama',
//		'tempat',
//		'tanggal_lahir',
		'email',
		/*
		'jenis_kelamin',
		'alamat',
		'agama',
		'sekolah',
		'kelas',
		'alamat_sekolah',
		'program',
		'no_formulir',
		'date_created',
		'is_active',
		'confirmasi_status',
		*/
array(
'class'=>'bootstrap.widgets.TbButtonColumn',
),
),
)); ?>
