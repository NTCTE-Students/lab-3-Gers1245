<?php

$numbers = [1, 2, 5, 4, 3, 6, 10, 8, 9, 7];

sort($numbers);

foreach($numbers as $smth) {
    print("{$smth} ");
}

rsort($numbers);

foreach($numbers as $smthn) {
    print("{$smthn} ");
}