<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'用户',
	'创建',
);

$this->menu=array(
// 	array('label'=>'List User', 'url'=>array('index')),
// 	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h2 style="color:#f67600">创建用户</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>