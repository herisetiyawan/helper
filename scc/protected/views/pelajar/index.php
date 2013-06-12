<?php
$this->breadcrumbs=array(
	'Pelajars',
);

$this->menu=array(
array('label'=>'Create Pelajar','url'=>array('create')),
array('label'=>'Manage Pelajar','url'=>array('admin')),
);
?>

<h1>Pelajars</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
