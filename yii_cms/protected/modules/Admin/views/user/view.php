<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'用户',
	$model->username,
);

$this->menu=array(
// 	array('label'=>'List User', 'url'=>array('index')),
// 	array('label'=>'Create User', 'url'=>array('create')),
// 	array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->id)),
// 	array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
// 	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h2 style="color:#f67600">用户 "<?php echo $model->username; ?>"的资料</h2>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'password',
		'realname',
		'create_time',
		'update_time',
		'create_user_id',
		'update_user_id',
		'status_id',
	),
)); ?>
