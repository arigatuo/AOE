<?php
/* @var $this SubtitleController */
/* @var $model Subtitle */

$this->breadcrumbs=array(
	'Subtitles'=>array('index'),
	$model->subtitle_id,
);

$this->menu=array(
	array('label'=>'List Subtitle', 'url'=>array('index')),
	array('label'=>'Create Subtitle', 'url'=>array('create')),
	array('label'=>'Update Subtitle', 'url'=>array('update', 'id'=>$model->subtitle_id)),
	array('label'=>'Delete Subtitle', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->subtitle_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Subtitle', 'url'=>array('admin')),
);
?>

<h1>View Subtitle #<?php echo $model->subtitle_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'subtitle_id',
		'item_id',
		'subtilte_info',
		'subtilte_photo',
		'ctime',
	),
)); ?>
