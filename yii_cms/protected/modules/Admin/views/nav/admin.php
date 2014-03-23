<?php
/* @var $this NavController */
/* @var $model Nav */

$this->breadcrumbs=array(
	'Navs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Nav', 'url'=>array('index')),
	array('label'=>'Create Nav', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#nav-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Navs</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'nav-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
// 		'nav_url',
		array('name'=>'nav_url','type'=>'raw','value'=>'CHtml::link($data->nav_url,$data->nav_url,array("target"=>"_blank"))', 'htmlOptions'=>array('width'=>'95px')),
		'nav_title',
// 		'status_id',
		array('name'=>'status_id','value'=>'$data->statusName->status_name','filter'=>Status::model()->getStatusList()),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
