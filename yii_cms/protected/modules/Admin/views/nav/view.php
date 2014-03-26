<?php
/* @var $this NavController */
/* @var $model Nav */

$this->breadcrumbs=array(
	'导航标签',
	$model->nav_title,
);

$this->menu=array(
// 	array('label'=>'List Nav', 'url'=>array('index')),
// 	array('label'=>'Create Nav', 'url'=>array('create')),
// 	array('label'=>'Update Nav', 'url'=>array('update', 'id'=>$model->id)),
// 	array('label'=>'Delete Nav', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
// 	array('label'=>'Manage Nav', 'url'=>array('admin')),
);
?>

<h2 style="color:#f67600">导航标签 "<?php echo $model->nav_title; ?>"</h2>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nav_url',
		'nav_title',
		'status_id',
	),
)); ?>
