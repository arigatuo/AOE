<?php
/**
 * Created by JetBrains PhpStorm.
 * User: lizhen
 * Date: 12/9/12
 * Time: 4:10 AM
 * To change this template use File | Settings | File Templates.
 */
class Helper extends CController
{
    public static function strlen_utf8($str){
        $i = 0;
        $count = 0;
        $len = strlen ($str);
        while ($i < $len) {
            $chr = ord ($str[$i]);
            if($chr >=0 && $chr <= 126){
                $count += 0.5;
            }else{
                $count++;
            }
            $i++;
            if($i >= $len) break;
            if($chr & 0x80) {
                $chr <<= 1;
                while ($chr & 0x80) {
                    $i++;
                    $chr <<= 1;
                }
            }
        }
        return ceil($count);
    }

    public static function trimArray($sub){
        $newSub = array();
        foreach($sub as $subK=>$subV){
            $subV = trim($subV);
            if(!empty($subV))
                $newSub[] = $subV;
        }
        return $newSub;
    }
}
