<?php
/* @var $this SubtitleController */
/* @var $model Subtitle */

$this->breadcrumbs=array(
	'Subtitles'=>array('index'),
	$model->subtitle_id=>array('view','id'=>$model->subtitle_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Subtitle', 'url'=>array('index')),
	array('label'=>'Create Subtitle', 'url'=>array('create')),
	array('label'=>'View Subtitle', 'url'=>array('view', 'id'=>$model->subtitle_id)),
	array('label'=>'Manage Subtitle', 'url'=>array('admin')),
);
?>

<h1>Update Subtitle <?php echo $model->subtitle_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>