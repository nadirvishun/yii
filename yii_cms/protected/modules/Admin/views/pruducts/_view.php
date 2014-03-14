<?php
/* @var $this PruductsController */
/* @var $data Pruducts */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pruducts_name')); ?>:</b>
	<?php echo CHtml::encode($data->pruducts_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pruducts_img')); ?>:</b>
	<?php echo CHtml::encode($data->pruducts_img); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pruducts_content')); ?>:</b>
	<?php echo CHtml::encode($data->pruducts_content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type_id')); ?>:</b>
	<?php echo CHtml::encode($data->type_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_time')); ?>:</b>
	<?php echo CHtml::encode($data->update_time); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('create_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->create_user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->update_user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_id')); ?>:</b>
	<?php echo CHtml::encode($data->status_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hit')); ?>:</b>
	<?php echo CHtml::encode($data->hit); ?>
	<br />

	*/ ?>

</div>