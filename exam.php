<?php
$subject = "abcde%f";
$pattern = '/^af/';
echo preg_match("/[\[^$%^&*~\]]/", $subject);
$days_ago = date('d-m-Y', strtotime('-99 days'));
echo date('l', strtotime('-100 days'));
echo date($days_ago)."<br>";


$arr = array (1=>'Понедельник', 2=>'Вторник', 3=>'Среда', 4=>'Четверг', 5=>'Пятница', 6=>'Суббота', 7=>'Воскресенье');
foreach ($arr as $key => $value) {
  if ($key == 6 || $key == 7) {
    echo "<b>".$value."</b>"."<br>";
  } else {
    echo "$key - $value".'<br>';
  }
}

$day = date('l');
$arr = array ('Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье');
foreach ($arr as $value) {
  if ($value == $day) {
    echo "<i>".$value."</i>"."<br>";
  } else {
    echo $value.'<br>';
  }
}

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$en = array();
$ru = array();
foreach ($arr as $key => $value) {
  $en[] = $key;
  $ru[] = $value;
}
foreach ($en as $value) {
  echo $value."<br>";
}
foreach ($ru as $value) {
  echo $value."<br>";
}

$num=1000;
    for($i=0; $i<=$num; $i++){
      if($num < 50){
        break;
      }
      $num /= 2;
    }
    echo $num."<br>";
    echo $i."<br>";
    $summ1=2;
    $summ2=4;
    $summ3=6;
    $n = 200;
    if($n < 150){
      echo $summ1*$n;
    } elseif (150 < $n && $n < 300) {
      echo $summ1*$n;
    } elseif ($n > 300) {
      echo $n*$summ1;
    }
$arr = array(0=>10, 1=>20, 2=>30);
foreach ($arr as $key => $value) {
echo "[$key] => $value <br>";
}
  ?>
