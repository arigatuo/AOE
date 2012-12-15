<html>
<head>
</head>
<body>
<?php
foreach($subtitle as $sub){
    echo "<br/>";
    echo CHtml::image($sub->getAttribute("subtilte_photo"), $sub->getAttribute("subtitle_id"));
}
?>
</body>
</html>