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

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'uname'); ?>
		<?php echo $form->textField($model,'uname'); ?>
		<?php echo $form->error($model,'uname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'other_id'); ?>
		<?php echo $form->textField($model,'other_id',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'other_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'other_type'); ?>
		<?php echo $form->textField($model,'other_type',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'other_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'other_info'); ?>
		<?php echo $form->textArea($model,'other_info',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'other_info'); ?>
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