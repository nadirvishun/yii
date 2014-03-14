<?php
/* @var $this PruductsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pruducts',
);

$this->menu=array(
	array('label'=>'Create Pruducts', 'url'=>array('create')),
	array('label'=>'Manage Pruducts', 'url'=>array('admin')),
);
?>

<h1>Pruducts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
