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
				$arr1[]= mt_rand(-10,10);
			}
			for($i=0; $i<10; $i++){
				echo $arr1[$i]."<br>";
			}
			$max = $arr1[0];
			$min = $arr1[0];
			$max_key = 0;
			$min_key = 0;
			for ($i=0; $i <10 ; $i++) {
				if($arr1[$i] > $max){
								$max=$arr1[$i];
								$max_key = $i;
						}
						if($arr1[$i] < $min){
							$min=$arr1[$i];
							$min_key = $i;
					}

			}

			echo "ответы:<br>";
			echo "Минимальное: Ключ= $min_key Элемент= $min <br>";
			echo "Максимальное: Ключ= $max_key Элемент= $max <br>";


			$a=array_keys($arr1, min($arr1));
			$b=array_keys($arr1, max($arr1));
			echo "Мин:<br>" ;
			print_r ($a);
			print_r ('<br>Макс:<br>');
			print_r ($b);
			?>

			<br>ЗАДАНИЕ 2.<br>
			<?php
			for($i=0; $i<10; $i++){
				$arr2[]= mt_rand(-10,10);
			}
			for($i=0; $i<10; $i++){
				echo $arr2[$i]."<br>";
			}
			$proiz=1;
			$i=0;
			echo "ответы: <br>";
			foreach($arr2 as $v2){
				if(($v2%2==0 || $v2%3==0) && $v2%6!==0){
					$i++;
					$proiz *= $v2;
				}
			}
			echo "Произведение= $proiz"."<br>";
			echo "Всчего  элементов: $i"."<br>";
			?>

			ЗАДАНИЕ 3.<br>
			<?php
			for($i=0; $i<10; $i++){
				$arr3[]= mt_rand(-10,10);
			}
			for($i=0; $i<10; $i++){
				echo $arr3[$i]."<br>";
			}
			$sum=0;
			echo "ответы: <br>";
			foreach($arr3 as $key3 => $v3){
				if(pow($v3,2) > 16){
					$sum += $key3;
				}
			}
			echo $sum;
			?>
			<br>ЗАДАНИЕ 4.<br>
			<?php
			for ($i=0; $i<3; $i++){
				for ($j=0; $j<3; $j++){
					$arr4[$i][$j] = mt_rand(0,10);
				}
			}
			var_dump($arr4);
			echo "<br>";
			 ?>

		 ЗАДАНИЕ 6.<br>
		 <?php
		 for ($i=0; $i<5; $i++){
			 $arr6[] = mt_rand(1,4);
		 }
		 for ($i=0; $i<5; $i++){
			 echo $arr6[$i]." ";
		 }
		 echo "<br>";
		 for ($i=0; $i < 5; $i++) {
			 switch($arr6[$i]){
			 	case 1:
			 		$array1[] = $arr6[$i];
			 	break;
			 	case 2:
			 		$array2[] = $arr6[$i];
			 	break;
			 	case $arr6[$i] >= 3:
			 		$array_other[] = $arr6[$i];
			 	break;
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
