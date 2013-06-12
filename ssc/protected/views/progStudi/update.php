<?php
$this->breadcrumbs=array(
	'Prog Studis'=>array('index'),
	$model->id_prog_stud=>array('view','id'=>$model->id_prog_stud),
	'Update',
);

	$this->menu=array(
	array('label'=>'List ProgStudi','url'=>array('index')),
	array('label'=>'Create ProgStudi','url'=>array('create')),
	array('label'=>'View ProgStudi','url'=>array('view','id'=>$model->id_prog_stud)),
	array('label'=>'Manage ProgStudi','url'=>array('admin')),
	);
	?>

	<h1>Update ProgStudi <?php echo $model->id_prog_stud; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>