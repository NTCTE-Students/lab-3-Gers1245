<?php

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$revNumbers = array_reverse($numbers);
$combinedArrays = array_merge($numbers, $revNumbers);

foreach ($combinedArrays as $smth) {
    print("{$smth} ");
}