<?php
$bmw = [
    'model' => "X5",
    'speed' => 120,
    'doors' => 5,
    'year' => 2015,
];

$toyota = [
    'model' => "X6",
    'speed' => 130,
    'doors' => 4,
    'year' => 2012,
];

$opel = [
    'model' => "X7",
    'speed' => 100,
    'doors' => 4,
    'year' => 2005,
];

$cars = [
    'bmw' => $bmw,
    'toyota' => $toyota,
    'opel' => $opel,
    ];

foreach ($cars as $key => $values){
    echo "CAR $key </br> ";
    foreach($values as $value){
        echo "$value ";
    }
    echo "</br></br>"
;}