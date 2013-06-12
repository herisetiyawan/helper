<?php
$this->breadcrumbs=array(
	'Prog Studis'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List ProgStudi','url'=>array('index')),
array('label'=>'Manage ProgStudi','url'=>array('admin')),
);
?>

<h1>Create ProgStudi</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>