<?php
/* @var $this PruductsTypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pruducts Types',
);

$this->menu=array(
	array('label'=>'Create PruductsType', 'url'=>array('create')),
	array('label'=>'Manage PruductsType', 'url'=>array('admin')),
);
?>

<h1>Pruducts Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
