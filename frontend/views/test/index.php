
<?php
use yii\helpers\Html ;
/* @var $this yii\web\View */
$this->title = "ลองเขียน yii2";
?>

<?php

$route1 = Yii::$app -> urlManager->createUrl('test/index') ;
?>

<a href="<?=$route1?>"> หน้าเเรก </a>
<br>
<?php

$route2 = Yii::$app -> urlManager->createUrl('test/t1') ;
?>

<a href="<?=$route2?>"> ไปที่ หน้า test1 </a>
<br>
<?php

$route3 = Yii::$app -> urlManager->createUrl(['test/t2','name'=>'weerapon','lname'=>'munyuen']) ;
?>

<a href="<?=$route3?>"> ไปที่ หน้า test2 </a>
<br>

<?= 
 // yii\helpers\Html::a('ลิงค์แบบที่ 3',['test/t2','name'=>'ชื่อ','lname'=>'นามสกุล']);
 Html::a('ลิงค์แบบที่ 3',['test/t2','name'=>'ชื่อ','lname'=>'นามสกุล']);
?>
<br>
