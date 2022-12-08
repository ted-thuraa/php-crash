<?php
/*---data types ---*/
/*-string - series of characters
-Integer - whole no
-Float - decimal no
-boolean - true or false
-array - can hold more than one variable
-object - a class
-NULL
-Resource - Special variable that holds a resource
*/

/*---Variable Rules ---*/
/*
-variales must be prefixed with $
-variables can't start with a no only letter and _
-only contain (A-z, 0-9, and _)
-they are case sensitive
*/
$name = 'ted';
$age = 23;
$has_kids = false;

echo $name;
var_dump($has_kids);
//var in strings
echo $name . ' is ' . $age . ' years old';
//better
echo "${name} is ${age} years old";


//constants for things that wont change
define('HOST', 'localhost');
define('DB_NAME', 'dev_db');

echo HOST;
