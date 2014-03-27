<?php
/* @var $this PruductsTypeController */
/* @var $model PruductsType */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pruducts-type-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note">带<span class="required">*</span> 必填</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pruducts_type_name'); ?>
		<?php echo $form->textField($model,'pruducts_type_name',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'pruducts_type_name'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'pruducts_type_img'); ?>
		<p class="hint">图片尺寸为：xxxx,格式为jpg/gif/png</p>
		<?php echo $form->fileField($model,'pruducts_type_img',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pruducts_type_img'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? '创建' : '更新'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->