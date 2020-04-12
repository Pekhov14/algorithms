<?php

function bubble_sort($arr) {
	for ($i = 0; $i < count($arr) - 1; $i++) {
		$flag = false;
		//1 - $i убираем сортированные элементы
		for ($j = 0; $j < count($arr) - 1 - $i; $j++) {
			if ($arr[$j] > $arr[$j+1]) {
				list($arr[$j], $arr[$j+1]) = [$arr[$j+1], $arr[$j]];
				$flag = true;
			}
		}
		if(!$flag) return $arr;
	}
	return $arr;
}


//$sorted = bubble_sort($arr);

$nums = range(1, 1000);
shuffle($nums); // перемегиваем

$start = microtime(true);
//sort($nums); // 0.000379
bubble_sort($nums); // 0.127959
$time = round(microtime(true) - $start, 6); // 0.000026
echo "<p><b>Time: </b> $time</p>";



// Смена значений с третей переменной
//$a = 5;
//$b = 10;
//$tmp = $a;
//$a = $b;
//$b = $tmp;

// смена через list
//list($a, $b) = [$b, $a];

// приоритет операторов
//$a = $a + $b - ($b = $a);

//var_dump($a, $b);