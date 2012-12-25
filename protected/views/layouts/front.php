<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <title></title>
    <?php $yii_base = Yii::app()->baseUrl; ?>
    <?php Yii::app()->getClientScript()->registerCoreScript('jquery'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo $yii_base?>/bootstrap/css/bootstrap.css" media="all">
    <script type="text/javascript" src="<?php echo $yii_base;?>/bootstrap/js/bootstrap.js"></script>
</head>
<body>
    <?php echo $content; ?>
</body>
</html>