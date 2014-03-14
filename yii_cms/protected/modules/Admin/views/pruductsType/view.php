<?php
/* @var $this PruductsTypeController */
/* @var $model PruductsType */

$this->breadcrumbs=array(
	'Pruducts Types'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PruductsType', 'url'=>array('index')),
	array('label'=>'Create PruductsType', 'url'=>array('create')),
	array('label'=>'Update PruductsType', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PruductsType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PruductsType', 'url'=>array('admin')),
);
?>

<h1>View PruductsType #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'pruducts_type_name',
	),
)); ?>
