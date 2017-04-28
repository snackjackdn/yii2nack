a = <?php echo $a ;?><br>
b = <?php echo $b ;?><br>
c = <?php echo $c ;?><br>



<hr>aray<hr>

<?php 
$data1 = [1,2,3,4] ;
print_r($data1) ;
echo"<hr>";
$data2 = array(1,2,3,4) ;
print_r($data2);
echo"<hr>";
$data3 = ['a'=> 1 ,'b'=>2,'c'=>3,'d'=>4] ;
print_r($data3);



?>

<?php

$route1 = Yii::$app -> urlManager->createUrl('test/index') ;
?>
<br>
<a href="<?=$route1?>"> หน้าเเรก </a>
<br>

