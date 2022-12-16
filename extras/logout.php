<?php
session_start();

//destroy session
session_destroy();
header('Location: /phpcourse/php-crash/13_sessions.php');