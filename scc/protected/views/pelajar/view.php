<?php
$this->breadcrumbs=array(
	'Pelajars'=>array('index'),
	$model->id_pelajar,
);

$this->menu=array(
array('label'=>'List Pelajar','url'=>array('index')),
array('label'=>'Create Pelajar','url'=>array('create')),
array('label'=>'Update Pelajar','url'=>array('update','id'=>$model->id_pelajar)),
array('label'=>'Delete Pelajar','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pelajar),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Pelajar','url'=>array('admin')),
);
?>

<h1>View Pelajar #<?php echo $model->id_pelajar; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_pelajar',
		'nip',
		'nama',
		'tempat',
		'tanggal_lahir',
		'email',
		'jenis_kelamin',
		'alamat',
		'agama',
		'sekolah',
		'kelas',
		'alamat_sekolah',
		'program',
		'no_formulir',
		'date_created',
		'is_active',
		'confirmasi_status',
),
)); ?>
