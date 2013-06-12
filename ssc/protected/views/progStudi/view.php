<?php
$this->breadcrumbs=array(
	'Prog Studis'=>array('index'),
	$model->id_prog_stud,
);

$this->menu=array(
array('label'=>'List ProgStudi','url'=>array('index')),
array('label'=>'Create ProgStudi','url'=>array('create')),
array('label'=>'Update ProgStudi','url'=>array('update','id'=>$model->id_prog_stud)),
array('label'=>'Delete ProgStudi','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_prog_stud),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage ProgStudi','url'=>array('admin')),
);
?>

<h1>View ProgStudi #<?php echo $model->id_prog_stud; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_prog_stud',
		'nama',
		'keterangan',
		'date_created',
		'user_created',
		'date_modified',
		'user_modified',
),
)); ?>
