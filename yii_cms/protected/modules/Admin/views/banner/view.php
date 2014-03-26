<?php
/* @var $this BannerController */
/* @var $model Banner */

$this->breadcrumbs=array(
	'轮播图片',
	$model->id,
);

$this->menu=array(
// 	array('label'=>'List Banner', 'url'=>array('index')),
// 	array('label'=>'Create Banner', 'url'=>array('create')),
// 	array('label'=>'Update Banner', 'url'=>array('update', 'id'=>$model->id)),
// 	array('label'=>'Delete Banner', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
// 	array('label'=>'Manage Banner', 'url'=>array('admin')),
);
?>

<h2 style="color:#f67600">轮播图片#<?php echo $model->id; ?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'banner_url',
		'banner_img',
		'banner_title',
		'create_time',
		'update_time',
		'create_user_id',
		'update_user_id',
		'status_id',
	),
)); ?>
