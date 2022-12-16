<?php
/*
syntax
for (initialize; condition; increment) {
    //execute
}
*/ 

for($x = 0; $x <= 10; $x++) {
    echo $x . '<br>';
}
 
$t = 0;
while($t <= 10) {
    echo 'Number' . $t . '<br>';
    $t++;
}

//do while


//looping array
$post = ['first', 'second', 'third', 'fourth'];

//for($x = 0; $x <= count($post);$x++) {
//    echo $post[$x];
//}
//same as
//foreach($post as $pos) {
//    echo $pos;
//}

//to get the index
//foreach($post as $index => $pos) {
//    echo $index . ' - ' . $post . '<br>';
//}