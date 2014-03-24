<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">带 <span class="required">*</span> 必须填写</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'passwordOld'); ?>
		<?php echo $form->passwordField($model,'passwordOld',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'passwordOld'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'passwordAgain'); ?>
		<?php echo $form->passwordField($model,'passwordAgain',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'passwordAgain'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? '修改' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->