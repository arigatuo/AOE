<?php
/* @var $this ItemController */
/* @var $model Item */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'item-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'photo'); ?>
        <?php $this->widget('ext.EAjaxUpload.EAjaxUpload',
        array(
            'id'=>'uploadpic',
            'config'=>array(
                'action'=>Yii::app()->createUrl('main/Ajax/Uploadimg'),
                'allowedExtensions'=>array("jpg"),//array("jpg","jpeg","gif","exe","mov" and etc...
                'sizeLimit'=>1*1024*1024,// maximum file size in bytes
                'onComplete'=>"js:function(id, fileName, responseJSON){
				                    photoUrl = baseUrl + '/' + responseJSON.folder+responseJSON .filename;
									jQuery('#Item_photo').val(photoUrl);
									jQuery('#adPic').attr('src', photoUrl);
									jQuery('#adPic').show();
                                }",
            )
        ));
        ?>
		<?php echo $form->textField($model,'photo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'photo'); ?>
	</div>

    <div class="row">
        <?php echo $form->labelEx($model,'yPosition'); ?>
        <?php echo $form->textField($model,'yPosition',array('rows'=>20, 'cols'=>50, 'size'=>80)); ?>
        <?php echo $form->labelEx($model,'lineMaxCount'); ?>
        <?php echo $form->textField($model,'lineMaxCount',array('rows'=>6, 'cols'=>50)); ?>
        <?php echo $form->labelEx($model,'fontSize'); ?>
        <?php echo $form->textField($model,'fontSize',array('rows'=>6, 'cols'=>50)); ?>
        <?php echo $form->labelEx($model,'fixLeft'); ?>
        <?php echo $form->textField($model,'fixLeft',array('rows'=>6, 'cols'=>50)); ?>
        <?php echo $form->labelEx($model,'shadowFix'); ?>
        <?php echo $form->textField($model,'shadowFix',array('rows'=>6, 'cols'=>50)); ?>
    </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

    <div class="row">
        <img src="<?php if(!$model->getIsNewRecord() && !empty($model->photo)){echo $model->photo;} ?>" id="adPic"/>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->