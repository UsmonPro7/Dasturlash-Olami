<?php

$server = "localhost";
$user = "root";
$pass = "";
$datasable = "login_register_pure_coding";

$conn = mysqli_connect($server, $user, $pass, $datasable);

if (!$conn)
{
    die("<script>alert('Connection Failed.')</script>");
}

?>