<?php
/* @var $this BannerController */
/* @var $data Banner */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('banner_url')); ?>:</b>
	<?php echo CHtml::encode($data->banner_url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('banner_img')); ?>:</b>
	<?php echo CHtml::encode($data->banner_img); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('banner_title')); ?>:</b>
	<?php echo CHtml::encode($data->banner_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creat_time')); ?>:</b>
	<?php echo CHtml::encode($data->creat_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_time')); ?>:</b>
	<?php echo CHtml::encode($data->update_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creat_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->creat_user_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('update_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->update_user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_id')); ?>:</b>
	<?php echo CHtml::encode($data->status_id); ?>
	<br />

	*/ ?>

</div>