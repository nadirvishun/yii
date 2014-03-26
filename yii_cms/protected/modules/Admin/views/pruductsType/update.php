<?php
/* @var $this PruductsTypeController */
/* @var $model PruductsType */

$this->breadcrumbs=array(
	'产品类别',
	$model->pruducts_type_name=>array('view','id'=>$model->id),
	'更新',
);

$this->menu=array(
// 	array('label'=>'List PruductsType', 'url'=>array('index')),
// 	array('label'=>'Create PruductsType', 'url'=>array('create')),
// 	array('label'=>'View PruductsType', 'url'=>array('view', 'id'=>$model->id)),
// 	array('label'=>'Manage PruductsType', 'url'=>array('admin')),
);
?>

<h2 style="color:#f67600">更新产品类别 " <?php echo $model->pruducts_type_name; ?>"</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>