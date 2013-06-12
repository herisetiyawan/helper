<?php
$this->breadcrumbs=array(
	'Informations'=>array('index'),
	$model->id_information=>array('view','id'=>$model->id_information),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Information','url'=>array('index')),
	array('label'=>'Create Information','url'=>array('create')),
	array('label'=>'View Information','url'=>array('view','id'=>$model->id_information)),
	array('label'=>'Manage Information','url'=>array('admin')),
	);
	?>

	<h1>Update Information <?php echo $model->id_information; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>