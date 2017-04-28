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
       $number = ['a'=>10,'b'=>20,'c'=>30] ;
         
       return $this->render('test1',$number);
      // echo "Your name is $name ";  
    }
    
     public function actionT2($name=null,$lname=null) 
    {
         $info = "Your name is = $name $lname" ;
         
       return $this->render('test2',['info'=>$info]);
      // echo "Your name is $name ";
    }
    
   


}

