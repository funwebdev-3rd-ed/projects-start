<?php
define('DBHOST', 'localhost');
define('DBNAME', 'security');
define('DBUSER', 'root');
define('DBPASS', '');

define('DBCONNSTRING','sqlite:./database/security.db');
//define('DBCONNSTRING',"mysql:host=" . DBHOST . ";dbname=" . DBNAME . ";charset=utf8mb4;");

$connectionDetails = Array(DBCONNSTRING,DBUSER,DBPASS);
?>