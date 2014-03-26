<?php
/* @var $this NavController */
/* @var $model Nav */

$this->breadcrumbs=array(
	'导航标签',
	'创建',
);

$this->menu=array(
// 	array('label'=>'List Nav', 'url'=>array('index')),
// 	array('label'=>'Manage Nav', 'url'=>array('admin')),
);
?>

<h2 style="color:#f67600">创建导航标签</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>