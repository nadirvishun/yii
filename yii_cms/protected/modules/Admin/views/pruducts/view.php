<?php
/* @var $this PruductsController */
/* @var $model Pruducts */

$this->breadcrumbs=array(
	'Pruducts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Pruducts', 'url'=>array('index')),
	array('label'=>'Create Pruducts', 'url'=>array('create')),
	array('label'=>'Update Pruducts', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Pruducts', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pruducts', 'url'=>array('admin')),
);
?>

<h1>View Pruducts #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'pruducts_name',
		'pruducts_img',
		'pruducts_content',
		'type_id',
		'create_time',
		'update_time',
		'create_user_id',
		'update_user_id',
		'status_id',
		'hit',
	),
)); ?>
