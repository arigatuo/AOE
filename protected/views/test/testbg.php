<?php
    $theItem = Item::model()->findByPk(6);
    $theItemAttributes = $theItem->getAttributes();

    $imageInfo = getimagesize(str_replace(Yii::app()->baseUrl."/", "",$theItemAttributes['photo']));
    $imageWidth = $imageInfo[0];

    $details = unserialize($theItemAttributes['Details']);
    $yPosition = explode(";", $details['yPosition']);

    $style = PhotoEditor::countInputStyle($imageWidth, $yPosition);
?>
<style>
    #bg{position:relative;background:url("<?php echo $theItemAttributes['photo'];?>") no-repeat;width:<?php echo $imageWidth?>px;height:<?php echo $imageInfo[1];?>px;border:0;margin:0;padding:0}
    .subtitle{font-weight:bold;border:1px dashed #efefef;background:black;color:white;opacity:0.5;width:<?php echo $style['inputWidth'];?>px;left:<?php echo $style['inputLeft'];?>px;position:absolute;text-align:center}
</style>
<?php echo CHtml::beginForm(Yii::app()->createUrl("/main/Index/Create")); ?>
<?php echo CHtml::listBox("item_id","",CHtml::listData(Item::model()->findAll(), 'item_id', 'title') ,array('photo'=>'photo') ); ?>
<div id="bg">
    <?php
        $count = 0;
        foreach($style['yFinalArray'] as $k=>$y){
            if($k % 2 == 0 && $k!=0 )
                $count++;
    ?>
                <input class="subtitle" name="subtitle[<?php echo $count?>][]" type="text" style="top:<?php echo $y;?>px"/>
    <?php
        }
    ?>
</div>
<?php echo CHtml::submitButton(); ?>
<?php echo CHtml::endForm(); ?>
