<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    Задание1<br>
    <?php
    $str = 'html css php';
    echo substr($str,0, 4)."<br>";
    echo substr($str,5, 3)."<br>";
    echo substr($str,9, 3)."<br>";
     ?>
     <br>
     <br>Задание2<br>
     <?php
     $str = 'Hello world';
     $len = strlen($str);
     $str = substr($str, $len-3);
     echo $str;
     ?>
     <br>
     <br>Задание3<br>
     <?php
     $str = 'http://www.youtube.com/';
     if (substr($str, 0, 7) == 'http://')
       echo "Да";
       else
       echo "Нет";
       ?>
       <br>
       <br>Задание4<br>
       <?php
       $str = "12345678";
       if(strlen($str) > 5){
         echo substr($str, 0, 5)."...";
       } else {
         echo $str;
       }
        ?>
       <br>
       <br>Задание5<br>
       <?php
       $str = '1a2b3c4b5d6e7f8g9h0';
       for ($i=0; $i < strlen($str) ; $i++) {
         if (ctype_digit($str[$i])){
           $str = str_replace($str[$i], '', $str);
         }
       }
       echo $str;
        ?>
        <br>
        <br>Задание6<br>
        <?php
        $str = '1234567890';
        $arr = str_split($str, 2);
        echo implode('-', $arr);
        ?>
      <br>
      <br>Задание7<br>
      <?php
      function day ($num){
        switch($num){
 			 	case 1:
        return "Понедельник";
 			 	break;
 			 	case 2:
        return "Вторник";
 			 	break;
 			 	case 3:
        return "Среда";
 			 	break;
        case 4:
        return "Четверг";
        break;
        case 5:
        return "Пятница";
        break;
        case 6;
        return "Суббота";
        break;
        case 7;
        return "Воскресенье";
        break;
       }
      }
      $num = 4;
      if($num >= 1 && $num <= 7){
        echo day($num);
      } else {
        echo "введите число от 1 до 7";
      }
      ?>
      <br>
      <br>Задание8<br>
      <?php
      function isNumberInRange ($num){
        if($num > 0  && $num < 10){
          return true;
        } else {
          return false;
        }
      }
      $num = 1;
      echo isNumberInRange ($num);
      ?>
      <br>
      <br>Задание9<br>
      <?php
      $num1 = array(1,2,3,4,5,6,7,8,9,0,10,12);
      for ($i=0; $i < sizeof($num1) ; $i++) {
        if (isNumberInRange ($num1[$i])) {
          $arr1[] = $num1[$i];
        }
      }
      var_dump($arr1);
      ?>
      <br>
      <br>Задание10<br>
      <?php
      function getDigitsSum($digit){
        $digits = str_split($digit);
        $digits = array_sum($digits);
        return $digits;
      }
      $digit = 456;
      echo getDigitsSum($digit);
      ?>
      <br>
      <br>Задание11<br>
      <?php
      for($i = 1; $i <2019; $i++){
        if(getDigitsSum($i) == 13){
          echo $i." ";
        }
      }
      ?>
      <br>
      <br>Задание12<br>
      <?php
      function getDivisors($num){
        for ($i=1; $i <= $num; $i++) {
          if($num % $i == 0){
            $arr[] = $i;
          }
        }
        return $arr;
      }
      $num = 10;
      var_dump (getDivisors($num));
      ?>
      <br>
      <br>Задание13<br>
      <?php
      $result1 = [];
      $result2 = [];
      function getCommonDivisors($num1, $num2){
        $res1 = getDivisors($num1);
        $res2 = getDivisors($num2);
        $result = array_intersect($res1, $res2);
        return var_dump($result);
      }
      $num1 = 40;
      $num2 = 48;
      echo getCommonDivisors($num1, $num2);
      ?>
  </body>
</html>
