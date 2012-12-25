<?php

class IndexController extends Controller
{
    public $layout = "////layouts/front";

    public function init(){
    }

    public function actionTest(){
        $this->render("test");
    }

	public function actionIndex()
	{
        $request = Yii::app()->request;
        $pk = $request->getParam("pk");
        if(empty($pk))
            $pk = 5;
        if(is_numeric($pk))
            $theItem = Item::model()->findByPk($pk);
        if(!empty($theItem) && $theItem != null){
        }else{
            throw new CHttpException("404");
        }


		$this->render('index', array(
                'theItem' => $theItem,
                'pk' => $pk,
            )
        );
	}

    public function actionList()
    {
        $subtitle = Subtitle::model()->findAll();

        $this->render("list", array(
            'subtitle' => $subtitle,
        ));
    }

    public function actionCreate(){
        $request = Yii::app()->request;
        $item_id = $request->getPost("item_id");
        $subtitle = $request->getPost("subtitle");

        $theItem = Item::model()->findByPk($item_id);
        if(!empty($theItem)){
            $theItemAttributes = $theItem->getAttributes();
            $imageUrl = str_replace(Yii::app()->baseUrl."/", "", $theItemAttributes['photo']);
            $details = unserialize($theItemAttributes['Details']);
            $yArray = explode(";", $details['yPosition']);

            $subtitleArray = array();
            foreach($subtitle as $k=>$sub){
                if(!empty($yArray[$k])){
                        $sub = Helper::trimArray($sub);
                        $subtitleArray[] = array(
                            'text'=> $sub, 'y'=>$yArray[$k]
                        );
                }
            }

            $newPhoto = new PhotoEditor($imageUrl,
                $subtitleArray,
                !empty($details['lineMaxCount'])  ? $details['lineMaxCount'] : 24,
                !empty($details['fontSize'])  ? $details['fontSize'] : 14,
                !empty($details['fixLeft'])  ? $details['fixLeft'] : 4,
                !empty($details['shadowFix'])  ? $details['shadowFix'] : 1
            );
            $newPhoto->doIt();

            if(!empty($newPhoto->fullpath)){
                $subtitle = new Subtitle();
                $subtitle->ctime = time();
                $subtitle->item_id = $item_id;
                $subtitle->subtilte_info = serialize($subtitle);
                $subtitle->subtilte_photo = Yii::app()->baseUrl."/".$newPhoto->fullpath;

                if($subtitle->save()){
                    $this->redirect($subtitle->subtilte_photo);
                }else{
                    /*
                    var_dump($subtitle->getErrors());
                    */
                }
            }
        }
    }
}