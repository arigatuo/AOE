<?php
/**
 * Created by JetBrains PhpStorm.
 * User: lizhen
 * Date: 12/9/12
 * Time: 1:33 AM
 * To change this template use File | Settings | File Templates.
 */
class TestController extends Controller
{
        public function actionTest1(){
            $imageUrl = "http://imgsrc.baidu.com/forum/pic/item/12db70cf3bc79f3dedff03cebaa1cd11738b291c.jpg";
            $newPhoto = new PhotoEditor($imageUrl,
                array(
                    array('text'=> array("对不起","我爱你"), 'y'=>679),
                    array('text'=> array("你邮木邮月得不对经"), 'y'=>460),
                ),
                30,
                12,
                4
            );
            $newPhoto->doIt();
        }

        public function actionTest4(){
            $imageUrl = "./images/erkang1.jpg";
            $newPhoto = new PhotoEditor($imageUrl,
                array(
                    array('text'=> array("我哪知道啊，还没来呢。。。"), 'y'=>662),
                    array('text'=> array("你的QQ签名是7.12,8.18,9.23 (),","答案到底是多少啊？我怎么研究都研究不出来"), 'y'=>303),
                ),
                24,
                14,
                4
            );
            $newPhoto->doIt();
        }

        public function actionTest2(){
            $a = file_get_contents("http://www.baidu.com");
            var_dump($a);
        }

        public function actionTest3(){
            $imageUrl = "http://weknowmemes.com/wp-content/uploads/2012/12/grumpy-cat-finally-smiles-meme.jpg";
            $newPhoto = new PhotoEditor($imageUrl,
                array(
                    array('text'=> array("对不起","我爱你"), 'y'=>679),
                    array('text'=> array("你邮木邮月得不对经"), 'y'=>460),
                ),
                10,
                42,
                4
            );
            $newPhoto->doIt();
        }

        public function actionTestBg(){
            $this->render("testbg");
        }
}
