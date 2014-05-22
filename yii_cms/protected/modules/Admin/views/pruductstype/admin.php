<?php
/* @var $this PruductsTypeController */
/* @var $model PruductsType */

$this->breadcrumbs=array(
	'产品类别',
	'管理',
);

$this->menu=array(
// 	array('label'=>'List PruductsType', 'url'=>array('index')),
// 	array('label'=>'Create PruductsType', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pruducts-type-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h2 style="color:#f67600">产品类别管理</h2>

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
	'id'=>'pruducts-type-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'pruducts_type_name',
// 		'pruducts_type_img',
		array('name'=>'pruducts_type_img','type'=>'raw','value'=>'CHtml::image(Yii::app()->baseUrl."/upload/pruducts_type_img/".$data->pruducts_type_img,"",array("width"=>"300px"))', 'filter'=>false),
		'pruducts_type_content',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
