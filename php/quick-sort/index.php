<?php

function dd($arr) {
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}

$arr = [15, 5, 1, 4, 3];


function  quick_sort($arr) {
	if (count($arr) < 2)
		return $arr;

	$pivot = $arr[0];
	$left_arr = $right_arr = [];

	for ($i = 1; $i < count($arr); $i++) {
		if($arr[$i] <= $pivot) {
			$left_arr[] = $arr[$i];
		} else {
			$right_arr[] = $arr[$i];
		}
	}
	$left_arr  = quick_sort($left_arr);
	$right_arr = quick_sort($right_arr);

	return array_merge($left_arr, [$pivot], $right_arr);
}



$nums = range(1, 1000000);
shuffle($nums);

$start = microtime(true);

quick_sort($arr); //  0.000028
//sort($arr); //      0.0000060
$time = round(microtime(true) - $start, 6);
echo "<p><b>Time: </b> $time</p>";

