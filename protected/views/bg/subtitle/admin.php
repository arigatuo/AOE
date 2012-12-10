<?php
/* @var $this SubtitleController */
/* @var $model Subtitle */

$this->breadcrumbs=array(
	'Subtitles'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Subtitle', 'url'=>array('index')),
	array('label'=>'Create Subtitle', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('subtitle-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Subtitles</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'subtitle-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'subtitle_id',
		'item_id',
        /*
		'subtilte_info',
        */
        array(
            'name'=>'subtilte_photo',
            'value' => 'CHtml::image($data->subtilte_photo, $data->subtitle_id, array("width"=>"200px", "height"=>"200px"))',
            'type'=>'raw',
        ),
		array(
            'name'=>'ctime',
            'value' => 'date("Ymd H:i:s", $data->ctime)',
        ),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
