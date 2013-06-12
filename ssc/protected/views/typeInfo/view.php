<?php
$this->breadcrumbs=array(
	'Type Infos'=>array('index'),
	$model->name,
);

$this->menu=array(
array('label'=>'List TypeInfo','url'=>array('index')),
array('label'=>'Create TypeInfo','url'=>array('create')),
array('label'=>'Update TypeInfo','url'=>array('update','id'=>$model->id_type_info)),
array('label'=>'Delete TypeInfo','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_type_info),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage TypeInfo','url'=>array('admin')),
);
?>

<h1>View TypeInfo #<?php echo $model->id_type_info; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_type_info',
		'name',
		'description',
		'date_created',
		'user_created',
		'date_modified',
		'user_modified',
),
)); ?>
