<?php

namespace frontend\controllers;

class TestController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionT1() 
    {
        $a = 50 ;
        $b = 33 ;
        $sum=$a+$b ;
        $para = ['sum'=>$sum , 'a'=>$a , 'b'=>$b] ;
        return $this->render('test1',$para);
       
       // echo "ทดสอบ อิอิ eiei" ;   
    }
    
     public function actionT2($name=null,$lname=null) 
    {
         $info = "Your name is = $name $lname" ;
         
       return $this->render('test1',['info'=>$info]);
      // echo "Your name is $name ";
    }
    
   


}

