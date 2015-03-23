<?php

namespace frontend\controllers;

class TestController extends \yii\web\Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionTest1() {
        //   echo 'ทดสอบ 1';
        $a = 3;
        $b = 5;
        $sum = $a + $b;
        $param = ['sum'=>$sum,'a'=>$a,'b'=>$b];
        
        return $this->render('test1',$param);
    }
    
    public function actionTest2('$name','$lname'){
        $info => 'Your name is';
        return $this->render('test2','info'=>$info);
       
        
    }
}
