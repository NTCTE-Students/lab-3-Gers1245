<?php

$iran = "Я взрывал иран";

var_dump($iran);

$iranArray = explode(" ", $iran);

foreach($iranArray as $smth) {
    print("{$smth} ");
}