<?php
$this->breadcrumbs=array(
	'Type Infos'=>array('index'),
	$model->name=>array('view','id'=>$model->id_type_info),
	'Update',
);

	$this->menu=array(
	array('label'=>'List TypeInfo','url'=>array('index')),
	array('label'=>'Create TypeInfo','url'=>array('create')),
	array('label'=>'View TypeInfo','url'=>array('view','id'=>$model->id_type_info)),
	array('label'=>'Manage TypeInfo','url'=>array('admin')),
	);
	?>

	<h1>Update TypeInfo <?php echo $model->id_type_info; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>