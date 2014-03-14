<?php
/* @var $this PruductsTypeController */
/* @var $data PruductsType */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pruducts_type_name')); ?>:</b>
	<?php echo CHtml::encode($data->pruducts_type_name); ?>
	<br />


</div>