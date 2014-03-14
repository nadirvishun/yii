<?php
/* @var $this PruductsTypeController */
/* @var $model PruductsType */

$this->breadcrumbs=array(
	'Pruducts Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PruductsType', 'url'=>array('index')),
	array('label'=>'Manage PruductsType', 'url'=>array('admin')),
);
?>

<h1>Create PruductsType</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>