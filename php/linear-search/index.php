<?php

// generate array
$nums = range(1, 1000000);

function linear_search ($arr, $item) {
    foreach($arr as $key => $value) {
        if($value) {
        	return $key;
		}
	}

    return false;
}


$start = microtime(true);

var_dump(linear_search($nums, 1000000)); // 00000.14
//var_dump(array_search(1000000, $nums)); // 0.003392
$time = round(microtime(true) - $start, 6); // 00000.23

echo "<p><b>Time: </b> $time</p>";