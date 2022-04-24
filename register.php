<?php

require_once "config.php";
require_once "session.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {

    $fullname = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST["confirm_password"]);
    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    if($query = $dbh->prepare("SELECT * FROM users WHERE email = :email")) {
        $error = '';

	$query->bindParam(':email', $email, PDO::PARAM_STR);
	$query->execute();

        if ($query->rowCount() > 0) {
            $error .= '<p class="error">The email address is already registered!</p>';
        } else {
            
            if (strlen($password ) < 6) {
                $error .= '<p class="error">Password must have atleast 6 characters.</p>';
            }

            
            if (empty($confirm_password)) {
                $error .= '<p class="error">Please enter confirm password.</p>';
            } else {
                if (empty($error) && ($password != $confirm_password)) {
                    $error .= '<p class="error">Password did not match.</p>';
                }
            }
            if (empty($error) ) {
                $insertQuery = $dbh->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?);");
                $result = $insertQuery->execute([$fullname, $email, $password]);
                if ($result) {
                    $error .= '<p class="success">Your registration was successful!</p>';
                } else {
                    $error .= '<p class="error">Something went wrong!</p>';
                }
            }
        }
    }
    header('Location: loginhtml.php');
    
}
?>