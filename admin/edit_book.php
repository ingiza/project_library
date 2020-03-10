<?php
    // error_reporting(E_ALL^E_WARNING);
    require_once "header.php";
    require_once "connection.php";

if(isset($_POST['updateBook'])){
    $name     =mysqli_real_escape_string($conn, $_POST['name']);
    $bookname =mysqli_real_escape_string($conn, $_POST['bookName']);
    $aname    =mysqli_real_escape_string($conn, $_POST['author']);
    $isbn     =mysqli_real_escape_string($conn, $_POST['isbn']);
    $profile  =mysqli_real_escape_string($conn, $_POST['profile']);
    $details  =mysqli_real_escape_string($conn, $_POST['details']);
    $id       =$_POST['theid'];
$sql="UPDATE `books` SET `adminName`='$name',`bookName`='$bookname',`authorName`='$aname',
    `ISBN`='$isbn',`bookProfile`='$profile',`details`='$details' WHERE `id`='$id'";
    if($conn->query($sql)){
        echo "record updated successfully";

    }else{
        echo "record not inserted: " .$conn->error;
    }

}
