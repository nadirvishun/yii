<?php
/* @var $this PruductsController */
/* @var $model Pruducts */

$this->breadcrumbs=array(
	'产品',
	$model->pruducts_name=>array('view','id'=>$model->id),
	'更新',
);

$this->menu=array(
// 	array('label'=>'List Pruducts', 'url'=>array('index')),
// 	array('label'=>'Create Pruducts', 'url'=>array('create')),
// 	array('label'=>'View Pruducts', 'url'=>array('view', 'id'=>$model->id)),
// 	array('label'=>'Manage Pruducts', 'url'=>array('admin')),
);
?>

<h2 style="color:#f67600">更新产品 "<?php echo $model->pruducts_name; ?>"</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>