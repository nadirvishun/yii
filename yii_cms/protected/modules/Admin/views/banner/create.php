<?php
/* @var $this BannerController */
/* @var $model Banner */

$this->breadcrumbs=array(
	'轮播图片',
	'添加',
);

$this->menu=array(
// 	array('label'=>'List Banner', 'url'=>array('index')),
// 	array('label'=>'Manage Banner', 'url'=>array('admin')),
);
?>

<h2 style="color:#f67600">添加轮播图片</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>