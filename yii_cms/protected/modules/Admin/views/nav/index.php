<?php
/* @var $this NavController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Navs',
);

$this->menu=array(
	array('label'=>'Create Nav', 'url'=>array('create')),
	array('label'=>'Manage Nav', 'url'=>array('admin')),
);
?>

<h1>Navs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
