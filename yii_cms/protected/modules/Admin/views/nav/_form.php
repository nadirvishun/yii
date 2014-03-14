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

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nav_url'); ?>
		<?php echo $form->textField($model,'nav_url',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'nav_url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nav_title'); ?>
		<?php echo $form->textField($model,'nav_title'); ?>
		<?php echo $form->error($model,'nav_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status_id'); ?>
		<?php echo $form->textField($model,'status_id'); ?>
		<?php echo $form->error($model,'status_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->