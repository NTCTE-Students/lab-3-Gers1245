<?php

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$revNumbers = array_reverse($numbers);

foreach ($revNumbers as $number) {
    print("{$number} ");
}