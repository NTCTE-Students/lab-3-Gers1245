<?php

$numbers = [1, 2, 3, 4, 1, 5, 6, 7, 8, 9, 10, 5];
$uniqNumbers = array_unique($numbers); // Интересно, оно всегда работает только при условии что является "значением" переменного?

foreach($uniqNumbers as $number) {
    print("{$number} ");
}