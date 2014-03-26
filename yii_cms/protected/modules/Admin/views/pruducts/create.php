<?php
/* @var $this PruductsController */
/* @var $model Pruducts */

$this->breadcrumbs=array(
	'产品',
	'添加',
);

$this->menu=array(
// 	array('label'=>'List Pruducts', 'url'=>array('index')),
// 	array('label'=>'Manage Pruducts', 'url'=>array('admin')),
);
?>

<h2 style="color:#f67600">添加产品</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>