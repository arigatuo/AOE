<?php
/* @var $this SubtitleController */
/* @var $model Subtitle */

$this->breadcrumbs=array(
	'Subtitles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Subtitle', 'url'=>array('index')),
	array('label'=>'Manage Subtitle', 'url'=>array('admin')),
);
?>

<h1>Create Subtitle</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>