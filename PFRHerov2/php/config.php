<?php
define('DB_NAME', 'pfrhero');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

$link= mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link) {
    die("Could not Connect: ".mysqli_error());
}

$db_selected= mysqli_select_db(DB_NAME, $link);

if (!$db_selected) {
    die('Can\'t use'.DB_NAME.':'.mysqli_error());
}

echo 'Connected Successfully';








?>