<?php
require_once "config.php";
require_once "session.php";



if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) 
{

    $uid = $_SESSION['userid'];
    $repn = trim($_POST['reposname']);
    $repl = trim($_POST['repos']);

    $insertQuery = $dbh->prepare("INSERT INTO proj (uid, reposname, reposlink) VALUES (?, ?, ?);");
    $insertQuery->execute([$uid, $repn, $repl]);
    header("location: projects.php");

}

?>