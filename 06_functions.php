<?php
$y = 12;
function registerUser() {
    // to access a global variable
    global $y;
    echo $y;
    $x = 10;
    echo 'User registered';
}

//echo $x;
registerUser();

//anonymous function
//$subtract = function($n1, $n2) {
//    return $n1 - $n2;
//};
//arrow function version of the above func
$subtract = fn($n1, $n2) => $n1 - $n2;
echo $subtract(10, 5);