<?php
/* @var $this SubtitleController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Subtitles',
);

$this->menu=array(
	array('label'=>'Create Subtitle', 'url'=>array('create')),
	array('label'=>'Manage Subtitle', 'url'=>array('admin')),
);
?>

<h1>Subtitles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
