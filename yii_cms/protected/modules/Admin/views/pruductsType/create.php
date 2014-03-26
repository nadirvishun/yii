<?php
/* @var $this PruductsTypeController */
/* @var $model PruductsType */

$this->breadcrumbs=array(
	'产品类别',
	'创建',
);

$this->menu=array(
// 	array('label'=>'List PruductsType', 'url'=>array('index')),
// 	array('label'=>'Manage PruductsType', 'url'=>array('admin')),
);
?>

<h2 style="color:#f67600">创建产品类别</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>