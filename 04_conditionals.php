<?php
$t = date("H");

if($t < 12) {
    echo 'Good Morning';
} elseif ($t < 17) {
    echo 'Good Afternoon';
} else {
    echo 'Good Evening';
}


//this
if(!empty($posts)) {
    echo $posts[0];
} else {
    echo 'no posts';
}
//same as
echo !empty($posts) ? $posts[0] : 'No posts';

