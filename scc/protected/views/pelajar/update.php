<?php
$this->breadcrumbs=array(
	'Pelajars'=>array('index'),
	$model->id_pelajar=>array('view','id'=>$model->id_pelajar),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Pelajar','url'=>array('index')),
	array('label'=>'Create Pelajar','url'=>array('create')),
	array('label'=>'View Pelajar','url'=>array('view','id'=>$model->id_pelajar)),
	array('label'=>'Manage Pelajar','url'=>array('admin')),
	);
	?>

	<h1>Update Pelajar <?php echo $model->id_pelajar; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>