<?php
/* @var $this BannerController */
/* @var $model Banner */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'banner-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note">带 <span class="required">*</span>必填</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'banner_title'); ?>
		<?php echo $form->textField($model,'banner_title',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'banner_title'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'banner_url'); ?>
		<p class="hint">格式：http://www.xxxx.com</p>
		<?php echo $form->textField($model,'banner_url',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'banner_url'); ?>
	</div>

	
	
	<div class="row">
		<?php echo $form->labelEx($model,'banner_img'); ?>
		<p class="hint">图片尺寸为：xxxx,格式为jpg/gif/png</p>
		<?php echo $form->fileField($model,'banner_img',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'banner_img'); ?>
	</div>

	

	

	<div class="row">
		<?php echo $form->labelEx($model,'status_id'); ?>
		<?php echo $form->dropDownList($model,'status_id',Status::model()->getStatusList()); ?>
		<?php echo $form->error($model,'status_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? '添加' : '更新'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->