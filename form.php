<?php
require_once "config.php";
require_once "session.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) 
{

    $about = trim($_POST['about']);
    $tel = trim($_POST['tel']);
    $tg = trim($_POST['tg']);
    $vk = trim($_POST['vk']);
    $town = ($_POST['town']);
    $prof = ($_POST['prof']);
    $error ='';
    $uid = $_SESSION["userid"];

    $sql = "UPDATE users SET about='$about', tel='$tel', tg='$tg', vk='$vk', town='$town', prof='$prof' WHERE id= $uid";
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $dbh->prepare($sql);
    $stmt->execute();

    // $updateQuery = $dbh->prepare("UPDATE users (about, tel, tg, vk, town) VALUES(?,?,?,?,?); WHERE id = $uid");
    // $updateQuery->execute([$about, $tel, $tg, $vk, $town]);
    // $sql = "SELECT * FROM users WHERE id = '$uid'";
    // $sql = "UPDATE users SET about='$about', tel='$tel', tg='$tg', vk='$vk', town='$town' WHERE id ='$uid'";
    
header('Location: profile.php');
}
?>