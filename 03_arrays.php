<?php
//simple array
$numbers = [1,44,32,23,43];
$fruits = array('apple', 'grapes', 'avocado');

var_dump($numbers);
echo $fruits[2];

//associative array
$hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f'
];


echo $hex['blue'];

//multidimentional array

$page = [
    [
        '1st' => '#f00',
        'blue' => '#0f0',
        'home' => 'content'
    ],
    [
        '2nd' => '#f00',
        'blue' => '#0f0',
        'about' => 'software engineer'
    ],
    [
        '3rd' => '#f00',
        'blue' => '#0f0',
        'contact' => '@gmail.com'
    ]
];
//access second array color
echo $page[1]["blue"];


//convert above to json data
var_dump(json_encode($page)); 