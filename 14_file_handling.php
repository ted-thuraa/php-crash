<?php
/* ---------- File Handling --------- */

/* 
  File handling is the ability to read and write files on the server.
  PHP has built in functions for reading and writing files.
*/

/*
r	- Open a file for read only. File pointer starts at the beginning of the file
w	- Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a	- Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x	- Creates a new file for write only. Returns FALSE and an error if file already exists
r+ -	Open a file for read/write. File pointer starts at the beginning of the file
w+ -	Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a+ -	Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x+	- Creates a new file for read/write. Returns FALSE and an error if file already exists
*/

$file = 'extras/users.txt';

if(file_exists($file)) {
    //echo readfile($file);
    //file pointer
    $handle = fopen($file, 'r');
    //get contents
    $content = fread($handle, filesize($file));
    fclose($handle);
    echo $content;
} else {
    //if it doesnt exist write it
    $handle = fopen($file, 'w');
    //PHP_EOL creates a new line
    $contents = 'ted' . PHP_EOL . 'tessy' . PHP_EOL . 'lilian';
    fwrite($handle, $contents);
    fclose($handle);
}