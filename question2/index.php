<?php 

$input = [5,3,4,3,4,1,3];
$output = [];

foreach (array_count_values($input) as $key=> $value) {
    if ($value == 1) {
        array_push($output,$key);
    }
}

var_dump(implode(',',$output));