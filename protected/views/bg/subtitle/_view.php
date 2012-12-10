<?php
/* @var $this SubtitleController */
/* @var $data Subtitle */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('subtitle_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->subtitle_id), array('view', 'id'=>$data->subtitle_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('item_id')); ?>:</b>
	<?php echo CHtml::encode($data->item_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subtilte_info')); ?>:</b>
	<?php echo CHtml::encode($data->subtilte_info); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subtilte_photo')); ?>:</b>
	<?php echo CHtml::encode($data->subtilte_photo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ctime')); ?>:</b>
	<?php echo CHtml::encode($data->ctime); ?>
	<br />


</div>