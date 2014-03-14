<?php
/* @var $this NavController */
/* @var $data Nav */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nav_url')); ?>:</b>
	<?php echo CHtml::encode($data->nav_url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nav_title')); ?>:</b>
	<?php echo CHtml::encode($data->nav_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_id')); ?>:</b>
	<?php echo CHtml::encode($data->status_id); ?>
	<br />


</div>