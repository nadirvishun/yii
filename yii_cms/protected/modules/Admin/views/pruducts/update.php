<?php
/* @var $this PruductsController */
/* @var $model Pruducts */

$this->breadcrumbs=array(
	'Pruducts'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pruducts', 'url'=>array('index')),
	array('label'=>'Create Pruducts', 'url'=>array('create')),
	array('label'=>'View Pruducts', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Pruducts', 'url'=>array('admin')),
);
?>

<h1>Update Pruducts <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>