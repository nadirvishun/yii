<?php
/* @var $this PruductsTypeController */
/* @var $model PruductsType */

$this->breadcrumbs=array(
	'Pruducts Types'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PruductsType', 'url'=>array('index')),
	array('label'=>'Create PruductsType', 'url'=>array('create')),
	array('label'=>'View PruductsType', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PruductsType', 'url'=>array('admin')),
);
?>

<h1>Update PruductsType <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>