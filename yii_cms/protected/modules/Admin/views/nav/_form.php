<?php
/* @var $this NavController */
/* @var $model Nav */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'nav-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">带 <span class="required">*</span> 必填</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nav_title'); ?>
		<?php echo $form->textField($model,'nav_title',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'nav_title'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'nav_url'); ?>
		<p class="hint">格式: http://www.xxx.com</p>
		<?php echo $form->textField($model,'nav_url',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'nav_url'); ?>
	</div>

	

	<div class="row">
		<?php echo $form->labelEx($model,'status_id'); ?>
		<?php echo $form->dropDownList($model,'status_id',Status::model()->getStatusList()); ?>
		<?php echo $form->error($model,'status_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? '创建' : '更新'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->