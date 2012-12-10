  <?php echo CHtml::beginForm(Yii::app()->createUrl("/main/Index/Create")); ?>
  <?php echo CHtml::listBox("item_id","",CHtml::listData($items, 'item_id', 'title') ,array('photo'=>'photo') ); ?>
  <?php for($i=0; $i<=3; $i++){  echo "<br/>";?>
  <?php echo CHtml::textField("subtitle[$i][]"); ?>
  <?php echo CHtml::textField("subtitle[$i][]");  ?>
  <?php } ?>
  <?php echo CHtml::submitButton(); ?>
  <?php echo CHtml::endForm(); ?>
