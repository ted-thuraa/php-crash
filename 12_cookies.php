<?php

/*
  Cookies are a mechanism for storing data in the remote browser and 
  thus tracking or identifying return users. You can set specific data 
  to be stored in the browser, and then retrieve it when the user visits the site again.
*/

//set cookie
setcookie('name', 'ted', time() + 86400 * 30); //86400 = 1 day

//get cookie and use
//first check for it
if(isset($_COOKIE['name'])) {
    echo $_COOKIE['name'];
}

//delete a cookie
//setcookie('name', '', time() - 86400);