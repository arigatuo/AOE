<?php
$theItemAttributes = $theItem->getAttributes();
$imageInfo = getimagesize(str_replace(Yii::app()->baseUrl."/", "",$theItemAttributes['photo']));
$details = unserialize($theItemAttributes['Details']);
$imageWidth = $details['width'];
$imageHeight = $details['height'];
$yPosition = explode(";", $details['yPosition']);
$style = PhotoEditor::countInputStyle($imageWidth, $yPosition);
?>
<style>
    #bg{position:relative;background:url("<?php echo $theItemAttributes['photo'];?>") no-repeat;width:<?php echo $imageWidth?>px;height:<?php echo $imageHeight;?>px;border:0;margin:0;padding:0}
    .subtitle{font-weight:bold;border:1px dotted #efe300;background:black;color:white;opacity:0.5;width:<?php echo $style['inputWidth'];?>px;left:<?php echo $style['inputLeft'];?>px;position:absolute;text-align:center;}
</style>
<link href="<?php echo Yii::app()->baseUrl;?>/css/jquery.selectbox.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl;?>/js/jquery.selectbox-0.2.min.js"></script>
<script type="text/javascript">
    jQuery(function(){
        var baseUrl  = "<?php echo Yii::app()->baseUrl;?>";
        jQuery("#item_id").bind('change', function(){
            location.href = "<?php echo Yii::app()->createUrl('main/Index/');?>?pk="+jQuery(this).val();
        });
        jQuery("#item_id").selectbox();
    })
</script>
<?php echo CHtml::beginForm(Yii::app()->createUrl("/main/Index/Create")); ?>
<?php echo CHtml::dropDownList("item_id", $pk ,CHtml::listData(Item::model()->findAll(), 'item_id', 'title') ,array('photo'=>'photo') ); ?>
<div id="bg">
    <?php
    $count = 0;
    foreach($style['yFinalArray'] as $k=>$y){
        if($k % 2 == 0 && $k!=0 )
            $count++;
        ?>
        <input class="subtitle" maxlength="<?php echo !empty($details['lineMaxCount']) ? $details['lineMaxCount'] : 22;?>" name="subtitle[<?php echo $count?>][]" type="text" style="top:<?php echo $y;?>px"/>
        <?php
    }
    ?>
</div>
<?php echo CHtml::submitButton(); ?>
<?php echo CHtml::endForm(); ?>

