<?php

session_start();

require_once "connection.php";

$uName    = $_POST['uName'];
$password = $_POST['password'];

$encpass  = md5($password);


$select = mysqli_query($conn, "SELECT * FROM `admin` WHERE `user_name`='$uName' AND `password`='$encpass'");

echo mysqli_num_rows($select);

if(mysqli_num_rows($select) > 0)
{
    $_SESSION['loggedIn'] = $uName;
    header('Location:dashbord.php');
}else{
    echo "Match Not Found";
    echo mysqli_error($conn);
}