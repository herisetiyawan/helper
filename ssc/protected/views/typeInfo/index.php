<?php
$this->breadcrumbs=array(
	'Type Infos',
);

$this->menu=array(
array('label'=>'Create TypeInfo','url'=>array('create')),
array('label'=>'Manage TypeInfo','url'=>array('admin')),
);
?>

<h1>Type Infos</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
