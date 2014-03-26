<?php
/* @var $this PruductsController */
/* @var $model Pruducts */

$this->breadcrumbs=array(
	'产品',
	$model->pruducts_name,
);

$this->menu=array(
// 	array('label'=>'List Pruducts', 'url'=>array('index')),
// 	array('label'=>'Create Pruducts', 'url'=>array('create')),
// 	array('label'=>'Update Pruducts', 'url'=>array('update', 'id'=>$model->id)),
// 	array('label'=>'Delete Pruducts', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
// 	array('label'=>'Manage Pruducts', 'url'=>array('admin')),
);
?>

<h2 style="color:#f67600">产品 "<?php echo $model->pruducts_name; ?>"的信息</h2>

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
