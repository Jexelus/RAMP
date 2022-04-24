<?php
define('DBSERVER', 'localhost'); // Database server
define('DBUSERNAME', 'root'); // Database username
define('DBPASSWORD', ''); // Database password
define('DBNAME', 'regramp'); // Database name

/* connect to MySQL database */
$dbh = new PDO('mysql:host=localhost;dbname=regramp', DBUSERNAME, DBPASSWORD);

 

if($dbh === false){
    die("Error: connection error. " . mysqli_connect_error());
}
?>