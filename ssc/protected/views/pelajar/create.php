<?php
$this->breadcrumbs=array(
	'Pelajars'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Pelajar','url'=>array('index')),
array('label'=>'Manage Pelajar','url'=>array('admin')),
);
?>

<h1>Create Pelajar</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>