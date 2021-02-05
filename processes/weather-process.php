<?php
use Orange\ApiConnect;

$data = [
    'q' => 'Colombo,LK',
    'appid' => OPEN_WEATHER,
];
$api = ApiConnect::getJSON('https://api.openweathermap.org/data/2.5/weather',$data);

print_r($api);