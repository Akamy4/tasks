<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>

	</head>
	<body>
		ЗАДАНИЕ 1.<br>
		<?php

			for($i=0; $i<10; $i++){
				$arr[]= mt_rand(-10,10);
			}
			for($i=0; $i<10; $i++){
				echo $arr[$i]."<br>";
			}
			$task1=array_keys($arr, min($arr));
			$task2=array_keys($arr, max($arr));
			print_r ("Ответы: <br>");
			print_r ($task1)."<br>";
			print_r ($task2);
			$max = $arr[0];
			$min = $arr[0];
			$max_k = 0;
			$min_k= 0;
			foreach($arr as $key => $v){
				if($v > $max){
					$max=$v;
					$max_key = $key;
			}
			if($v < $min){
				$min=$v;
				$min_key = $key;
		}
	}
			echo "ответы:<br>";
			print_r ("Минимальное функ: Ключ= $min_key Элемент= $min <br>");
			print_r ("Максимальное функ: Ключ= $max_key Элемент= $max <br>");
			?>

			<br>ЗАДАНИЕ 2.<br>
			<?php
			for($i=0; $i<10; $i++){
				$arr1[]= mt_rand(-10,10);
			}
			for($i=0; $i<10; $i++){
				echo $arr1[$i]."<br>";
			}
			$sum=1;
			$i=0;
			echo "ответы: <br>";
			foreach($arr1 as $v1){
				if(($v1%2==0 || $v1%3==0) && $v1%6!==0){
					$i++;
					$sum *= $v1;
				}
			}
			echo "Произв= $sum"."<br>";
			echo "Всчего  элементов: $i"."<br>";
			?>

			ЗАДАНИЕ 3.<br>
			<?php
			for($i=0; $i<10; $i++){
				$arr2[]= mt_rand(-10,10);
			}
			for($i=0; $i<10; $i++){
				echo $arr2[$i]."<br>";
			}
			$sum=0;
			echo "ответы: <br>";
			foreach($arr2 as $key2 => $v2){
				if(pow($v2,2) > 16){
					$sum += $key2;
				}
			}
			echo $sum;
			?>
			ЗАДАНИЕ 4.<br>
			<?php
			for ($i=0; $i<3; $i++){
				for ($j=0; $j<3; $j++){
					$arr3[$i][$j] = mt_rand(0,10);
				}
			}
			var_dump($arr3);
			echo "<br>";
			for ($i=0; $i<3; $i++){
				for ($j=0; $j<3; $j++){
					echo $arr3[$i][$j]." ";
				}
				echo "<br>";
			}
			 ?>

		 ЗАДАНИЕ 6.<br>
		 <?php
		 for ($i=0; $i<5; $i++){
			 $arr4[] = mt_rand(1,4);
		 }
		 for ($i=0; $i<5; $i++){
			 echo $arr4[$i]." ";
		 }
		 echo "<br>";
		 foreach ($arr4 as $value) {
		 	if ($value == 1) {
		 		$array1[]=$value;
		 	} elseif ($value == 2) {
		 		$array2[]=$value;
		 	} else {
				$array_other[] = $value;
			}
		 }
		 echo "Массив 1: "."<br>";
		 if(isset($array1)){
			 foreach ($array1 as $value) {
				 echo $value." ";
			 }
		 } else {
			 echo "Массив пустой";
		 }
		 echo "<br>";
		 echo "Массив 2: "."<br>";
		 if(isset($array2)){
			 foreach ($array2 as $value) {
				 echo $value." ";
			 }
		 } else {
			 echo "Массив пустой";
		 }
		 echo "<br>";
		 echo "Массив 3: "."<br>";
		 if(isset($array_other)){
			 foreach ($array_other as $value) {
				 echo $value." ";
			 }
		 } else {
			 echo "Массив пустой";
		 }
		 echo "<br>";
		  ?>

	</body>
</html>
