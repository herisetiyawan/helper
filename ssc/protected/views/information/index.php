<?php
$this->breadcrumbs=array(
	'Informations',
);

$this->menu=array(
array('label'=>'Create Information','url'=>array('create')),
array('label'=>'Manage Information','url'=>array('admin')),
);
?>

<h1>Informations</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
