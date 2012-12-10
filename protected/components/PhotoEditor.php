<?php
/**
 * Created by JetBrains PhpStorm.
 * User: lizhen
 * Date: 12/9/12
 * Time: 1:37 AM
 * To change this template use File | Settings | File Templates.
 * 图片处理类
 */
class PhotoEditor
{
    const FONT_FILE = "./fonts/yaheibold.ttf";
    const FONT_FILE_N = "./fonts/yahei.ttf";
    private $photoUrl, $text, $photo, $lineMaxCount, $fontSize, $fixLeft;
    public $fullpath;

    public function PhotoEditor($photoUrl, $textInfo, $lineMaxCount=26, $fontSize=15, $fixLeft=1, $shadowFix=1){
        $this->photoUrl = $photoUrl;
        $this->textInfo = $textInfo;
        $this->lineMaxCount = $lineMaxCount;
        $this->fontSize = $fontSize;
        $this->fixLeft = $fixLeft;
        $this->shadowFix = $shadowFix;
    }

    public function doIt(){
        $this->getPhoto();
        $this->parseTextToPhoto();
        $this->outputPhoto();
    }

    public function parseTextToPhoto(){

        if(!empty($this->photo) && !empty($this->textInfo)){
            if(is_array($this->textInfo)){
                foreach($this->textInfo as $text){
                    $this->textFilter($text);
                }
            }
        }else{
            die(__FUNCTION__."error");
        }
    }

    public function textFilter($text){
        $im = imagecreatetruecolor(400, 30);
        $white = imagecolorallocate($im, 255, 255, 255);
        $grey = imagecolorallocate($im, 128, 128, 128);
        $black = imagecolorallocate($im, 0, 0, 0);

        $countLine = count($text['text']);
        if($countLine == 2){
            $base_y = $text['y'];
            $follow_y = array(
                $base_y - $this->fontSize*1.5,
                $base_y
            );
            for($i = 0; $i <=1; $i++){
                $y = $this->rePositionText($text['text'][$i]);
                imagettftext($this->photo, $this->fontSize-1, 0, $y, $follow_y[$i], $black, self::FONT_FILE, $text['text'][$i]);
                imagettftext($this->photo, $this->fontSize-1, 0, $y - $this->shadowFix,$follow_y[$i]-$this->shadowFix, $white, self::FONT_FILE, $text['text'][$i]);
            }
        }elseif($countLine == 1) {
                imagettftext($this->photo, $this->fontSize-1, 0, $this->rePositionText($text['text'][0]), $text['y'], $black, self::FONT_FILE, $text['text'][0]);
                imagettftext($this->photo, $this->fontSize-1, 0, $this->rePositionText($text['text'][0]) - $this->shadowFix, $text['y'] - $this->shadowFix, $white, self::FONT_FILE, $text['text'][0]);
        }
    }

    public function getPhoto(){
        if(!empty($this->photoUrl)){
            $this->photo = imagecreatefromjpeg($this->photoUrl);
        }
    }


    public function outputPhoto(){
        if(!empty($this->photo)){
            $dir = "./upload/".date("Ymd")."/";
            $name = md5(time().mt_rand(999,99999)).".jpg";

            if(!is_dir($dir)){
                mkdir($dir);
            }

            $this->fullpath = $dir.$name;

            $data = imagejpeg($this->photo, $this->fullpath, 80);
            /*
            header("content-type:image/jpg");
            imagejpeg($this->photo);
            */
        }
    }

    //根据重新调整字的位置
    public function rePositionText($text){
        $textLength = Helper::strlen_utf8($text);
        $left_padding_text = ($this->lineMaxCount - $textLength + $this->fixLeft) * $this->fontSize / 2;
        return $left_padding_text;
    }
}
