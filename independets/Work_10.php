<?php

$cities = [
    [
		'name' => 'Москва',
		'distance' => '512km',
	],
	[
		'name' => 'Невьянск',
		'distance' => '104km',
	],
	[
		'name' => 'Режь',
		'distance' => '217km',
	],
];

$translate = [
	'name' => 'Название',
	'distance' => 'Расстояние',
];

foreach($cities as $city) {
    foreach($city as $key => $value) {
        print("{$translate[$key]}: {$value} <br>");
    }
    print('<br>');
}