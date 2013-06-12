<?php
$this->breadcrumbs = array(
    'Admins' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Admin', 'url' => array('index')),
    array('label' => 'Create Admin', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('admin-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Manage Admins</h1>

<p>
    You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
        &lt;&gt;</b>
    or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button btn')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'admin-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id_admin',
        'username',
//		'password',
        'fullname',
        'email',
        'access_status',
//		'no_phone',
        /*
          'access_status',
          'date_created',
          'user_created',
          'date_modified',
          'user_modified',
         */
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'template' => '{chpass}{delete}{update}{view}',
//            'htmlOptions'=>array('style'=>''),
            'buttons' => array
                (
                'chpass' => array
                    (
                    'label' => 'Update password',
                    'imageUrl' => Yii::app()->request->baseUrl . '/images/key2.png',
                    'url' => 'Yii::app()->createUrl("/admin/update", array("chpass"=>"","id"=>$data->id_admin))',
                ),
            ),
        ),
    ),
));
?>