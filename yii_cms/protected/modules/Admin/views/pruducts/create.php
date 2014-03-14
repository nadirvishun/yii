<?php
/* @var $this PruductsController */
/* @var $model Pruducts */

$this->breadcrumbs=array(
	'Pruducts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pruducts', 'url'=>array('index')),
	array('label'=>'Manage Pruducts', 'url'=>array('admin')),
);
?>

<h1>Create Pruducts</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>