<?php
$input = [0, 2, 3, 4, 6, 7, 10];
$output = [];
$zerovalues = [];

foreach ($input as $value) {
    if ($value != 0) {
        array_push($output, $value);
    } else {
        array_push($zerovalues, $value);
    }
}

$output = array_merge($output, $zerovalues);

var_dump($output);