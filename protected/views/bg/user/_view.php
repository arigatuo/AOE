<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('uid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->uid), array('view', 'id'=>$data->uid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uname')); ?>:</b>
	<?php echo CHtml::encode($data->uname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('other_id')); ?>:</b>
	<?php echo CHtml::encode($data->other_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('other_type')); ?>:</b>
	<?php echo CHtml::encode($data->other_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('other_info')); ?>:</b>
	<?php echo CHtml::encode($data->other_info); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ctime')); ?>:</b>
	<?php echo CHtml::encode($data->ctime); ?>
	<br />


</div>