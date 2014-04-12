<?php
/* @var $this PruductsController */
/* @var $model Pruducts */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pruducts-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note">带<span class="required">*</span> 必填</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pruducts_name'); ?>
		<?php echo $form->textField($model,'pruducts_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pruducts_name'); ?>
	</div>

	

	<div class="row">
		<?php echo $form->labelEx($model,'pruducts_content'); ?>
		<p class="hint">图片尺寸为： 740px * xxx,格式为jpg/gif/png</p>
		<?php $this->widget('application.extensions.editor.CKkceditor',array(
   			 "model"=>$model,                # Data-Model
   			 "attribute"=>'pruducts_content',         # Attribute in the Data-Model
   			 "height"=>'400px',
   			 "width"=>'100%',
   			 "filespath"=>Yii::app()->basePath."/../upload/pruducts_content/",
   			 "filesurl"=>Yii::app()->baseUrl."/upload/pruducts_content/",
  			  ) 
			);?>
		<?php echo $form->error($model,'pruducts_content'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'pruducts_img'); ?>
		<p class="hint">图片尺寸为： 430px * 280px,格式为jpg/gif/png</p>
		<?php echo $form->fileField($model,'pruducts_img',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pruducts_img'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type_id'); ?>
		<?php echo $form->dropDownList($model,'type_id',PruductsType::model()->getPruductsTypeList()); ?>
		<?php echo $form->error($model,'type_id'); ?>
	</div>

	

	<div class="row">
		<?php echo $form->labelEx($model,'status_id'); ?>
		<?php echo $form->dropDownList($model,'status_id',Status::model()->getStatusList()); ?>
		<?php echo $form->error($model,'status_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hit'); ?>
		<?php echo $form->textField($model,'hit',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'hit'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? '添加' : '更新'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->