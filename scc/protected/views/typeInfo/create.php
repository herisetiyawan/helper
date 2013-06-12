<?php
$this->breadcrumbs=array(
	'Type Infos'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List TypeInfo','url'=>array('index')),
array('label'=>'Manage TypeInfo','url'=>array('admin')),
);
?>

<h1>Create TypeInfo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>