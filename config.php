<?php
define('DBSERVER', 'localhost'); // Database server
define('DBUSERNAME', 'root'); // Database username
define('DBPASSWORD', 'root'); // Database password
define('DBNAME', 'regramp'); // Database name
file_put_contents('D:\logs.txt', print_r('123', true));
/* connect to MySQL database */
$db = mysqli_connect(DBSERVER, DBUSERNAME, DBPASSWORD, DBNAME);
 
file_put_contents('D:\logs.txt', print_r($db, true));
if($db === false){
    die("Error: connection error. " . mysqli_connect_error());
}
?>