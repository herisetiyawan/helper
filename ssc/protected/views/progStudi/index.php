<?php
$this->breadcrumbs=array(
	'Prog Studis',
);

$this->menu=array(
array('label'=>'Create ProgStudi','url'=>array('create')),
array('label'=>'Manage ProgStudi','url'=>array('admin')),
);
?>

<h1>Prog Studis</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
