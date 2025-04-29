<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];


if ($username == 'Dinupa' && $password == '105200876') {
    $_SESSION['user'] = $username;
    header('Location: welcome.php');
    exit(); 
} else {
    echo "Invalid login. <a href='login.html'>Try again</a>";
}
?>