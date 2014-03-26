<?php
/* @var $this PruductsTypeController */
/* @var $model PruductsType */

$this->breadcrumbs=array(
	'产品类别',
	$model->pruducts_type_name,
);

$this->menu=array(
// 	array('label'=>'List PruductsType', 'url'=>array('index')),
// 	array('label'=>'Create PruductsType', 'url'=>array('create')),
// 	array('label'=>'Update PruductsType', 'url'=>array('update', 'id'=>$model->id)),
// 	array('label'=>'Delete PruductsType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
// 	array('label'=>'Manage PruductsType', 'url'=>array('admin')),
);
?>

<h2 style="color:#f67600">产品类别 "<?php echo $model->pruducts_type_name; ?>"</h2>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'pruducts_type_name',
	),
)); ?>
