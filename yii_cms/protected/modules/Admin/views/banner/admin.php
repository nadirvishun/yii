<?php
/* @var $this BannerController */
/* @var $model Banner */

$this->breadcrumbs=array(
	'轮播图片',
	'管理',
);

$this->menu=array(
// 	array('label'=>'List Banner', 'url'=>array('index')),
// 	array('label'=>'Create Banner', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#banner-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h2 style="color:#f67600">轮播图片管理</h2>

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
	'id'=>'banner-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
// 		'banner_url',
		array('name'=>'banner_url','type'=>'raw', 'value'=>'CHtml::link($data->banner_url, $data->banner_url, array("target"=>"_blank"))', 'htmlOptions'=>array('width'=>'95px')),
// 		'banner_img',
		array('name'=>'banner_img','type'=>'raw','value'=>'CHtml::image(Yii::app()->baseUrl."/upload/banner_img/".$data->banner_img,"",array("width"=>"300px"))', 'filter'=>false),
		'banner_title',
// 		'status_id',
		array('name'=>'status_id','value'=>'$data->statusName->status_name','filter'=>Status::model()->getStatusList()),
// 		'create_time',
// 		'update_time',
		/*
		'create_user_id',
		'update_user_id',
		
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
