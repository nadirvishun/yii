<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'用户',
	$model->username=>array('view','id'=>$model->id),
	'更新',
);

$this->menu=array(
// 	array('label'=>'List User', 'url'=>array('index')),
// 	array('label'=>'Create User', 'url'=>array('create')),
// 	array('label'=>'View User', 'url'=>array('view', 'id'=>$model->id)),
// 	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h2 style="color:#f67600">更新用户" <?php echo $model->username; ?>"的资料</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>