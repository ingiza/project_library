<?php
session_start();
error_reporting(E_ALL^E_WARNING);
require_once "connection.php";
  

//! insert books

if (isset($_POST['insertBook'])){
    $name       =   mysqli_real_escape_string($conn, $_POST['name']);
    $book       =   mysqli_real_escape_string($conn, $_POST['bookName']);
    $author     =   mysqli_real_escape_string($conn, $_POST['author']);
    $ISBN       =   mysqli_real_escape_string($conn, $_POST['isbn']);
    $profile    =   mysqli_real_escape_string($conn, $_POST['file']);
    $details    =   mysqli_real_escape_string($conn, $_POST['details']);

    if (empty($name) || empty($book) || empty($author) ||
    empty($ISBN) || empty($details)){
        die("please fill all fields");
    }
    elseif (!preg_match("/^[a-zA-Z ]+$/",$name)) {
        $name_error = "Name must contain only alphabets and space";
    
    $sql    =   "INSERT INTO books(adminName, bookName, authorName, ISBN, bookProfile,details)
                VALUE(' $name ', ' $book', '$author', '$ISBN', '$profile', '$details')";

    if (mysqli_query($conn,$sql)){

        header("Location:dashbord.php");
        exit;
    }else{
        echo "ERROR: not able to execute $sql. " . mysqli_error ($conn);
    }
}
    }
