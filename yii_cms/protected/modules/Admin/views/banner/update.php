<?php
/* @var $this BannerController */
/* @var $model Banner */

$this->breadcrumbs=array(
	'轮播图片',
	$model->id=>array('view','id'=>$model->id),
	'更新',
);

$this->menu=array(
// 	array('label'=>'List Banner', 'url'=>array('index')),
// 	array('label'=>'Create Banner', 'url'=>array('create')),
// 	array('label'=>'View Banner', 'url'=>array('view', 'id'=>$model->id)),
// 	array('label'=>'Manage Banner', 'url'=>array('admin')),
);
?>

<h2 style="color:#f67600">更新轮播图片#<?php echo $model->id; ?></h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>