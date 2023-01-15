<?php
$input = [[2, 7, 7, 1, 8, 2, 7, 8, 7], 16];
$numsoma = [];
$total = 0;
$output = [];

foreach ($input as $value) {
    if (is_array($value)) {
        $numsoma = $value;
    } else {
        $total = $value;
    }
}

for ($i = 0; $i < count($numsoma); $i++) {
    if (count(array_slice($numsoma, $i, 3)) == 3) {
        $arraysoma = array_slice($numsoma, $i, 3);
        if (array_sum($arraysoma) == $total) {
            array_push($output, $arraysoma);
        }
    }
}

print_r($output);
