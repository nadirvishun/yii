<?php
/* @var $this NavController */
/* @var $model Nav */

$this->breadcrumbs=array(
	'Navs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Nav', 'url'=>array('index')),
	array('label'=>'Create Nav', 'url'=>array('create')),
	array('label'=>'View Nav', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Nav', 'url'=>array('admin')),
);
?>

<h1>Update Nav <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>