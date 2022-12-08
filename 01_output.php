<?php
//echo - Outputs strings, numbers, html, etc
//echo 123, 'hello', 23.5;
//echo <h1>hello</h1>
//escaping characters with a backslash
echo "is your name O\ 'reilly";

// Print - works like echo but can only take a single argument
//print 123;

//print_r() - prints single values and arrays
//print_r([1,2,3]);


//var_dump() - returns more info like data type and length
//var_dump(true);

//var_export - similar to var_dump(). outputs a string representation of a variable
//var_export('hello');
?>


    <h1><?php echo 'post one' ?></h1> 
    best practice with semi colon
    <h1><?php echo 'post one'; ?></h1>
    might see something like this. its still the same but requires
    a certain server option to work like that
    <h1><?= 'post one'; ?></h1>


