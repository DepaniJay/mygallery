<?php

$server = "remotemysql.com";
$username = "LJfrIkc1Op";
$password = "0l7i5b22to";
$db = "LJfrIkc1Op";
$port = 3306;

$con = mysqli_connect($server,$username,$password,$db,$port);

// for localhost 
// $server = "localhost";
// $username = "root";
// $password = "";
// $db = "test";

// $con = mysqli_connect($server,$username,$password,$db);

if($con){
    echo "Connection Successful";
}else{
    echo "No Connection";
}

if(isset($_POST['submit'])){
    $user = $_POST['user'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $comment = $_POST['comment'];
    
    $insertquery = "INSERT INTO `galleryuserinfo`(`user`, `email`, `mobile`, `comment`) VALUES ('$user','$email','$mobile','$comment')";

    echo $insertquery;
    $query = mysqli_query($con,$insertquery);

    if($query){
        header('location:index.php');
    }
}












?>