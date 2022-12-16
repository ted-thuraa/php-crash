<?php
//$fruits = ['apple', 'orange', 'pear'];
//
////get length
//echo count($fruits);
//
////search array
//var_dump(in_array('apple', $fruits));
//
////add to array
//$fruits[] = 'grape';
//array_push($fruits, 'avocado', 'strawberry');
////to add at the beginning
//array_unshift($fruits, 'blueberry');

//remove from array(removes the last one)
//array_pop($fruits);
////remove from beginning
//array_shift($fruits);
//remove specific element
//unset($fruits[5]);

//to split to chunks eg 2 each
//$chunked_array = array_chunk($fruits, 3);
//print_r($chunked_array);

//concatenate array
$arr1 = [1,2,3];
$arr2 = [4,5,6];

//$arr3 = array_merge($arr1, $arr2);

// using spread operator
$arr4 = [...$arr1, ...$arr2];

//combines two arrays with one serving as keys and the other values
$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];

$c = array_combine($a, $b);
//sample output
//Array ( [green] => avocado [red] => apple [yellow] => banana )

//get only keys
$keys = array_keys($c);
//print_r($keys);

//flip array keys become values and vice versa
$flipped = array_flip($c);

//print_r($c);

//create an array of range
$numbers = range(1, 20);

//maps through each array item and performs a func
$newNumbers = array_map(function($number) {
    return "Number ${number}";
}, $numbers);

//print_r($newNumbers);


//filter
$lessThan10 = array_filter($numbers, fn($number) => $number <= 10);

//print_r($lessThan10);

//sum af an array
$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
var_dump($sum);