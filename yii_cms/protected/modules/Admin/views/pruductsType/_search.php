<?php
/* @var $this PruductsTypeController */
/* @var $model PruductsType */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pruducts_type_name'); ?>
		<?php echo $form->textField($model,'pruducts_type_name',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pruducts_type_img'); ?>
		<?php echo $form->textField($model,'pruducts_type_img',array('size'=>60,'maxlength'=>255)); ?>
	</div>
	
	<div class="row">
        <?php echo $form->label($model,'pruducts_type_content'); ?>
        <?php echo $form->textArea($model,'pruducts_type_content',array('rows'=>6, 'cols'=>50)); ?>
    </div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->