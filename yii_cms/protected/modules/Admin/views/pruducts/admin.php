<?php
/* @var $this PruductsController */
/* @var $model Pruducts */

$this->breadcrumbs=array(
	'产品',
	'管理',
);

$this->menu=array(
// 	array('label'=>'List Pruducts', 'url'=>array('index')),
// 	array('label'=>'Create Pruducts', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pruducts-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h2 style="color:#f67600">产品管理</h2>

<!-- <p> -->
<!-- You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b> -->
<!-- or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done. -->
<!-- </p> -->

<?php echo CHtml::link('高级搜索','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pruducts-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'pruducts_name',
// 		'pruducts_img',
		array('name'=>'pruducts_img','type'=>'raw','value'=>'CHtml::image(Yii::app()->baseUrl."/upload/pruducts_img/".$data->pruducts_img,"",array("width"=>"200px"))', 'filter'=>false),
		'pruducts_content',
// 		'type_id',
		array('name'=>'type_id','value'=>'$data->typeName->pruducts_type_name','filter'=>PruductsType::model()->getPruductsTypeList(),'htmlOptions'=>array('width'=>'45px')),
// 		'status_id',
		array('name'=>'status_id','value'=>'$data->statusName->status_name','filter'=>Status::model()->getStatusList(),'htmlOptions'=>array('width'=>'45px')),
		
		/*
		'create_time',
		'update_time',
		'create_user_id',
		'update_user_id',
		'status_id',
		'hit',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
