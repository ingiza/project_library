<?php
session_start();
error_reporting(E_ALL^E_WARNING);
require_once "connection.php";
   
//! insert persons

if (isset($_POST['admin'])){

    # trim all white spaces in uname and password
    $name       =   mysqli_real_escape_string($conn, $_POST['name']);
    $uName       =   mysqli_real_escape_string($conn, $_POST['uName']);
    $email    =   mysqli_real_escape_string($conn, $_POST['email']);
    $password       =   mysqli_real_escape_string($conn,md5($_POST['password']));
    $retype    =   mysqli_real_escape_string($conn, $_POST['retype']);
    $gender    =   mysqli_real_escape_string($conn, $_POST['gender']);
    $phone    =   mysqli_real_escape_string($conn, $_POST['phone']);
    $idNumber    =   mysqli_real_escape_string($conn, $_POST['idNumber']);



    if (empty($name) || empty($uName) || empty($email) ||
    empty($password) || empty($retype) || empty($gender)
    || empty($phone) || empty($idNumber)){
        // header("Location:index.php");
        echo 'please fill all fields ';
        die();
    }elseif(!preg_match("/^[a-zA-Z]*$/",$uName)||!preg_match("/^[a-zA-Z]*$/",$aName)){
        // header("Location:signup.php");

        ###### CR >Bad Idea. Pass errors well
        echo "<script>alert('use letters for name and username')</script>";
        die();
    }elseif($password !== $retype && strlen($password) <8){
        echo "<script>alert('passwords does not match')</script>";
        // header("Location:signup.php");
        // echo 'passwords does not much';
        die();
    }elseif(!preg_match("/^[0-9]*$/",$phone) && strpos($phone,"254") !== "0"){
        header("Location:signup.php");
        echo 'Phonenumber must be a number';
        die();
    }
    if (isset($_POST ["address"])) if ($_POST ["address"] != "") { echo "Your form submission has an error."; exit; }

    $sql = "INSERT INTO `admin`(`admin_name`,`user_name`, `email`, `password`,`gender`,`phone_number`,`id_number`)
                VALUE(' $name ', ' $uName', '$email', '$password', '$gender', '$phone', '$idNumber')";

    if (mysqli_query($conn,$sql)){

        header("Location:index.php");

        echo "added successfully";
        exit;
    }else{
        echo "ERROR: not able to execute $sql. " . mysqli_error ($conn);
    }
}

// adminsign
