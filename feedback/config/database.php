

<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'ted');
    define('DB_PASS', '123456');
    define('DB_NAME', 'php_dev');

    // Create connection
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    //check connection
    if($conn->connect_error) {
        //kill everything
        die('connecton failed ' . $conn->connect_error);
    }

    