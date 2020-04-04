<?php

$nums = range(1, 1000000);

function binary_search($arr, $item, $start = 0, $final = null) {
	if($final === null) {
		$final = count($arr) - 1;
	}
	if ($start > $final) {
		return 'item not found';
	}
	$half = (int)(($start + $final) / 2);
//	var_dump($start, $final);
//	echo $half . '<br>';

	if ($arr[$half] !== $item) {
		if ($arr[$half] < $item) {
			$start = $half + 1;
		} else {
			$final = $half - 1;
		}
		return binary_search($arr, $item, $start, $final);
	}

	return $half;
}





$start = microtime(true);

var_dump(binary_search($nums, 1000000)); // 00000.14
$time = round(microtime(true) - $start, 6); // 0.000026

echo "<p><b>Time: </b> $time</p>";


/*
 * $arr  = [1, ..., 100]
 * $item = 27
 *
 * 1) start = 1, final = 100
 *    half = (int)((1 + 100) / 2) = 50
 *    50 > 27 ? final = 50 - 1
 *
 * 2) start = 1, final = 49
 *    half = (int)((1 + 49) / 2) = 25
 *    25 < 27 ? start = 25 + 1
 *
 * 3) start = 26, final = 49
 *    half = (int)((26 + 49) / 2) = 37
 *    37 > 27 ? final = 37 - 1
 *
 * 4) start = 26, final = 36
 *    half = (int)((26 + 36) / 2) = 31
 *    31 > 27 ? final = 30 - 1
 *
 * 5) start = 26, final = 30
 *    half = (int)((26 + 30) / 2) = 28
 *    28 > 27 ? final = 28 - 1
 *
 * 6) start = 26, final = 27
 *    half = (int)((26 + 27) / 2) = 26
 *    26 > 27 ? final = 26 + 1
 *
 * 7) start = 27, final = 27
 *    half = (int)((27 + 27) / 2) = 27
 *    27 == 27
 */