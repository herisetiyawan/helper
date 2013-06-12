<?php
$this->breadcrumbs=array(
	'Informations'=>array('index'),
	$model->id_information,
);

$this->menu=array(
array('label'=>'List Information','url'=>array('index')),
array('label'=>'Create Information','url'=>array('create')),
array('label'=>'Update Information','url'=>array('update','id'=>$model->id_information)),
array('label'=>'Delete Information','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_information),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Information','url'=>array('admin')),
);
?>

<h1>View Information #<?php echo $model->id_information; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_information',
		'id_type_info',
		'image',
		'description',
		'date_created',
		'user_created',
		'date_modified',
		'user_modified',
),
)); ?>
