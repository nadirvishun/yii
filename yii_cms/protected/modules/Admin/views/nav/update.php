<?php
/* @var $this NavController */
/* @var $model Nav */

$this->breadcrumbs=array(
	'导航标签',
	$model->nav_title=>array('view','id'=>$model->id),
	'更新',
);

$this->menu=array(
// 	array('label'=>'List Nav', 'url'=>array('index')),
// 	array('label'=>'Create Nav', 'url'=>array('create')),
// 	array('label'=>'View Nav', 'url'=>array('view', 'id'=>$model->id)),
// 	array('label'=>'Manage Nav', 'url'=>array('admin')),
);
?>

<h2 style="color:#f67600">更新标签 "<?php echo $model->nav_title; ?>"</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>