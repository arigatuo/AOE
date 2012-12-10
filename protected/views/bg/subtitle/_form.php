<?php
/* @var $this SubtitleController */
/* @var $model Subtitle */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'subtitle-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'subtitle_id'); ?>
		<?php echo $form->textField($model,'subtitle_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'subtitle_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'item_id'); ?>
		<?php echo $form->textField($model,'item_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'item_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subtilte_info'); ?>
		<?php echo $form->textArea($model,'subtilte_info',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'subtilte_info'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subtilte_photo'); ?>
		<?php echo $form->textField($model,'subtilte_photo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'subtilte_photo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ctime'); ?>
		<?php echo $form->textField($model,'ctime',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'ctime'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->