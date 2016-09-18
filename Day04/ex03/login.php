<?php
session_start();
include 'auth.php';
$login = $_GET['login'];
$pass = $_GET['passwd'];
if (auth($login, $pass))
{
    $_SESSION['logged_on_user'] = $_GET['login'];
    echo "OK\n";
}
else
{
    $_SESSION['logged_on_user'] = "";
    echo "ERROR\n";
}