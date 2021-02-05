<?php
use Orange\ApiConnect;

$data = [
    'q' => 'Colombo,LK',
    'appid' => '0fda066fba8d3db963c55e3070fec64a',
];
$api = ApiConnect::getJSON('https://api.openweathermap.org/data/2.5/weather',$data);

print_r($api);