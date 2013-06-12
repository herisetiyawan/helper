<?php
$this->breadcrumbs=array(
	'Admins'=>array('index'),
	$model->id_admin,
);

$this->menu=array(
array('label'=>'List Admin','url'=>array('index')),
array('label'=>'Create Admin','url'=>array('create')),
array('label'=>'Update Admin','url'=>array('update','id'=>$model->id_admin)),
array('label'=>'Delete Admin','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_admin),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Admin','url'=>array('admin')),
);
?>

<h1>View Admin #<?php echo $model->id_admin; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_admin',
		'username',
		'password',
		'fullname',
		'email',
		'no_phone',
		'access_status',
		'date_created',
		'user_created',
		'date_modified',
		'user_modified',
),
)); ?>
