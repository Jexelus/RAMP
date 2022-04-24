<?php

require_once "config.php";
require_once "session.php";

$error = '';
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // validate if email is empty
    if (empty($email)) {
        $error .= '<p class="error">Please enter email.</p>';
    }

    // validate if password is empty
    if (empty($password)) {
        $error .= '<p class="error">Please enter your password.</p>';
    }

    if (empty($error)) {
        if($query = $dbh->prepare("SELECT * FROM users WHERE email = :email")) {
            $query->bindParam(':email', $email, PDO::PARAM_STR);
            $query->execute();
            $row = $query->fetch();
            var_dump($row);
            if ($row) {
                if($password === $row['password'])
                { // ПОРОЛИ НЕ ХЕШИРОВАЛИ!   
                    $_SESSION["userid"] = $row['id'];
                    $_SESSION["user"] = $row;

                    // Redirect the user to welcome page
                    header("location: profile.php");
                    exit;
                } else {
                    $error .= '<p class="error">The password is not valid.</p>';
                }
            } else {
                $error .= '<p class="error">No User exist with that email address.</p>';
            }
        }
        
    }
}