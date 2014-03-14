<?php
/* @var $this PruductsController */
/* @var $model Pruducts */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pruducts-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pruducts_name'); ?>
		<?php echo $form->textField($model,'pruducts_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pruducts_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pruducts_img'); ?>
		<?php echo $form->textField($model,'pruducts_img'); ?>
		<?php echo $form->error($model,'pruducts_img'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pruducts_content'); ?>
		<?php echo $form->textArea($model,'pruducts_content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'pruducts_content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type_id'); ?>
		<?php echo $form->textField($model,'type_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_time'); ?>
		<?php echo $form->textField($model,'create_time'); ?>
		<?php echo $form->error($model,'create_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'update_time'); ?>
		<?php echo $form->textField($model,'update_time'); ?>
		<?php echo $form->error($model,'update_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_user_id'); ?>
		<?php echo $form->textField($model,'create_user_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'create_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'update_user_id'); ?>
		<?php echo $form->textField($model,'update_user_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'update_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status_id'); ?>
		<?php echo $form->textField($model,'status_id'); ?>
		<?php echo $form->error($model,'status_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hit'); ?>
		<?php echo $form->textField($model,'hit',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'hit'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->